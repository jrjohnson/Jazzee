<?php

namespace Jazzee\CommonBundle\Migration;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema,
    Symfony\Component\DependencyInjection\ContainerInterface,
    Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * Update page types to use bundles instead of classes
 */
class Version20130901000000 extends AbstractMigration implements ContainerAwareInterface
{

    private $container;
    private $types;

    public function __construct(\Doctrine\DBAL\Migrations\Version $version)
    {
        parent::__construct($version);
        $this->types = array();
        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Branching',
            'bundleName'         => 'jazzee_branching_page',
            'routeLoaderService' => 'jazzee_branching_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Education',
            'bundleName'         => 'jazzee_education_page',
            'routeLoaderService' => 'jazzee_education_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\ETSMatch',
            'bundleName'         => 'jazzee_etsmatch_page',
            'routeLoaderService' => 'jazzee_etsmatch_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\ExternalId',
            'bundleName'         => 'jazzee_externalid_page',
            'routeLoaderService' => 'jazzee_externalid_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Lock',
            'bundleName'         => 'jazzee_lock_page',
            'routeLoaderService' => 'jazzee_lock_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Payment',
            'bundleName'         => 'jazzee_payment_page',
            'routeLoaderService' => 'jazzee_payment_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\QASAddress',
            'bundleName'         => 'jazzee_qasaddress_page',
            'routeLoaderService' => 'jazzee_qasaddress_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Recommenders',
            'bundleName'         => 'jazzee_recommenders_page',
            'routeLoaderService' => 'jazzee_recommenders_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Standard',
            'bundleName'         => 'jazzee_standard_page',
            'routeLoaderService' => 'jazzee_standard_page.routeLoader'
        );

        $this->types[] = array(
            'id'                 =>  null,
            'class'              => '\Jazzee\Page\Text',
            'bundleName'         => 'jazzee_text_page',
            'routeLoaderService' => 'jazzee_text_page.routeLoader'
        );
    }
    
    public function preUp(Schema $schema)
    {
        parent::preUp($schema);
        $sql = 'SELECT id,class FROM page_types';
        $rows = $this->connection->executeQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);
        $classes = array();
        foreach ($rows as $row) {
            $classes[$row['class']] = $row['id'];
        }
        foreach ($this->types as &$type) {
            $type['id'] = $classes[$type['class']];
        }
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function up(Schema $schema)
    {
        $table = $schema->getTable('page_types');
        $table->addColumn('routeLoaderService', 'string', array(
            'length'    => 255,
            'notNull' => false
        ));
        $table->addColumn('bundleName', 'string', array(
            'length'    => 255,
            'notNull' => false
        ));
        $table->addUniqueIndex(array('bundleName'), 'pagetype_bundleName');
        $table->dropIndex('pagetype_class');
        $table->dropColumn('class');
    }

    public function postUp(Schema $schema)
    {
        parent::postUp($schema);
        
        $fixPageType = $this->connection->prepare(
            'UPDATE page_types SET ' .
            'bundleName=:bundleName, routeLoaderService=:routeLoaderService ' .
            'WHERE id=:id'
        );
        foreach ($this->types as $type) {
            $fixPageType->bindParam('id', $type['id']);
            $fixPageType->bindParam('bundleName', $type['bundleName']);
            $fixPageType->bindParam(
                'routeLoaderService',
                $type['routeLoaderService']
            );
            $fixPageType->execute();
            $this->write(
                "<info>Changed {$type['class']} pages " .
                "to {$type['bundleName']}."
            );
        }
    }
    
    public function preDown(Schema $schema)
    {
        parent::preDown($schema);
        $sql = 'SELECT id,bundleName FROM page_types';
        $rows = $this->connection->executeQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);
        $classes = array();
        foreach ($rows as $row) {
            $classes[$row['bundleName']] = $row['id'];
        }
        foreach ($this->types as &$type) {
            $type['id'] = $classes[$type['bundleName']];
        }
    }

    public function down(Schema $schema)
    {
        $table = $schema->getTable('page_types');
        $table->addColumn('class', 'string', array(
            'length'    => 255,
            'notNull' => false
        ));
        $table->addUniqueIndex(array('class'), 'pagetype_class');
        $table->dropColumn('bundlename');
        $table->dropColumn('routeloaderservice');
        $table->dropIndex('pagetype_bundlename');
    }
    
    public function postDown(Schema $schema)
    {
        parent::postDown($schema);
        $fixPageType = $this->connection->prepare(
            'UPDATE page_types SET class=:classname WHERE id=:id'
        );
        foreach ($this->types as $type) {
            $fixPageType->bindParam('id', $type['id']);
            $fixPageType->bindParam('classname', $type['class']);
            $fixPageType->execute();
            $this->write(
                "<info>Changed {$type['bundleName']} pages " .
                "to {$type['class']}."
            );
        }
    }
}

<?php

namespace Jazzee\CommonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jazzee\CommonBundle\Entity\Application;

class LoadTestApplicationData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Create an initial set of Test applications
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $generator = \Faker\Factory::create();
        $populator = new \Faker\ORM\Doctrine\Populator($generator, $manager);
        $program   = $this->getReference('jazzee.commonbundle.entity.program#0');
        $populator->addEntity(
            'Jazzee\CommonBundle\Entity\Application',
            3,
            array('program'  => $program)
        );
        $entities     = $populator->execute();
        $applications = $entities['Jazzee\CommonBundle\Entity\Application'];
        foreach ($applications as $key => $class) {
            $class->setCycle(
                $this->getReference(
                    'jazzee.commonbundle.entity.cycle#' . $key
                )
            );
            $this->addReference(
                'jazzee.commonbundle.entity.application#' . $key,
                $class
            );
            $manager->persist($class);
        }
        $applications[0]->publish();
        $applications[0]->visible();
        $applications[1]->unPublish();
        $applications[1]->inVisible();
        $applications[2]->publish();
        $applications[2]->inVisible();
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}

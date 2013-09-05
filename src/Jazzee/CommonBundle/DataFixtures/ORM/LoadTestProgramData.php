<?php

namespace Jazzee\CommonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jazzee\CommonBundle\Entity\Program;

class LoadTestProgramData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Create an initial set of Test programs
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $generator  = \Faker\Factory::create();
        $populator  = new \Faker\ORM\Doctrine\Populator($generator, $manager);
        $populator->addEntity(
            'Jazzee\CommonBundle\Entity\Program',
            3,
            array(
                'name' => function () use ($generator) {
                    return $generator->text();
                },
                'shortName' => function () use ($generator) {
                    return $generator->word();
                }
            )
        );
        $entities = $populator->execute();
        $programs = $entities['Jazzee\CommonBundle\Entity\Program'];
        $programs[0]->unExpire();
        $programs[1]->unExpire();
        $programs[2]->expire();

        foreach ($programs as $key => $class) {
            $this->addReference(
                'jazzee.commonbundle.entity.program#' . $key,
                $class
            );
            $manager->persist($class);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}

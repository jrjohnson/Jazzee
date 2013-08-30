<?php

namespace Jazzee\CommonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jazzee\CommonBundle\Entity\Cycle;

class LoadTestCycleData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Create an initial set of Test cycles
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $generator = \Faker\Factory::create();
        $populator = new \Faker\ORM\Doctrine\Populator($generator, $manager);
        $populator->addEntity(
            'Jazzee\CommonBundle\Entity\Cycle',
            3,
            array(
                'name' => function () use ($generator) {
                    return $generator->word;
                }
            )
        );
        $entities = $populator->execute();
        $cycles   = $entities['Jazzee\CommonBundle\Entity\Cycle'];
        foreach ($cycles as $key => $class) {
            $this->addReference(
                'jazzee.commonbundle.entity.cycle#' . $key,
                $class
            );
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}

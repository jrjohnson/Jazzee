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
        $refPrefix = 'jazzee.commonbundle.entity.cycle#';
        $cycle = new Cycle();
        $cycle->setName('firstcycle');
        $manager->persist($cycle);
        $this->addReference($refPrefix . '0', $cycle);
        
        $cycle = new Cycle();
        $cycle->setName('secondcycle');
        $manager->persist($cycle);
        $this->addReference($refPrefix . '1', $cycle);
        
        $cycle = new Cycle();
        $cycle->setName('thirdcycle');
        $manager->persist($cycle);
        $this->addReference($refPrefix . '2', $cycle);
        
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

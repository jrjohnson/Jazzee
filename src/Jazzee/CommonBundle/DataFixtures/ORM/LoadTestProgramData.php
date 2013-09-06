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
        $refPrefix = 'jazzee.commonbundle.entity.program#';
        $program = new Program;
        $program->setName('Test Program');
        $program->setShortName('tp');
        $this->addReference($refPrefix . '0',$program);
        $manager->persist($program);
        
        $program = new Program;
        $program->setName('Test Program 2');
        $program->setShortName('tp2');
        $this->addReference($refPrefix . '1',$program);
        $manager->persist($program);
        
        $program = new Program;
        $program->setName('Test Program (expired)');
        $program->setShortName('tpexpired');
        $program->expire();
        $this->addReference($refPrefix . '2',$program);
        $manager->persist($program);

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

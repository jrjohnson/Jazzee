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
        $refPrefix ='jazzee.commonbundle.entity.application#';
        $program = $this->getReference('jazzee.commonbundle.entity.program#0');
        $application = new Application();
        $application->setProgram($program);
        $application->setCycle($this->getReference('jazzee.commonbundle.entity.cycle#0'));
        $application->setWelcome("First Application published, visible");
        $this->addReference($refPrefix . '0',$application);
        $application->setOpen('today');
        $application->setClose('tomorrow');
        $application->publish();
        $application->visible();
        $manager->persist($application);
        
        $application = new Application();
        $application->setProgram($program);
        $application->setCycle($this->getReference('jazzee.commonbundle.entity.cycle#1'));
        $application->setWelcome("Second Application unpublished, invisible");
        $this->addReference($refPrefix . '1',$application);
        $application->inVisible();
        $manager->persist($application);
        
        $application = new Application();
        $application->setProgram($program);
        $application->setCycle($this->getReference('jazzee.commonbundle.entity.cycle#2'));
        $application->setWelcome("Third Application published, invisible");
        $this->addReference($refPrefix . '2',$application);
        $application->setOpen('today');
        $application->setClose('tomorrow');
        $application->publish();
        $application->inVisible();
        $manager->persist($application);
        
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

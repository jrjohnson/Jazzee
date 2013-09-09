<?php

namespace Jazzee\CommonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jazzee\CommonBundle\Entity\Applicant;

class LoadTestApplicantData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Create an initial set of Test applications
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $application = $this->getReference('jazzee.commonbundle.entity.application#0');
        $applicant = new Applicant();
        $applicant->setApplication($application);
        $applicant->setFirstName('Test');
        $applicant->setLastName('Person');
        $applicant->setEmail('test@example.com');
        $applicant->setPassword('password');
        $this->addReference('jazzee.commonbundle.entity.application#0applicant#1', $applicant);
        $manager->persist($applicant);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}

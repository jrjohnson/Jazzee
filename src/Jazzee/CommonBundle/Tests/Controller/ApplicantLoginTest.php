<?php

namespace Jazzee\CommonBundle\Tests\Controller;

use IC\Bundle\Base\TestBundle\Test\Functional\WebTestCase;
use Jazzee\CommonBundle\Entity\Application;

class ApplicantLoginTest extends WebTestCase
{

    protected static function getFixtureList()
    {
        return array(
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestApplicationData',
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestCycleData',
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestProgramData',
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestApplicantData'
        );
    }
    
    /**
     * Submit a login form and return the client;
     * @param \Jazzee\CommonBundle\Entity\Application $application
     * @param string $email
     * @param string $password
     * @return \Symfony\Bundle\FrameworkBundle\Client
     */
    protected function submitLoginForm(Application $application, $email, $password)
    {
        $client  = $this->getClient();
        $crawler = $client->request(
            'GET',
            "/{$application->getProgram()->getShortName()}" .
            "/{$application->getCycle()->getName()}" .
            '/login'
        );

        $form = $crawler->selectButton('login')->form();
        $crawler = $client->submit(
            $form,
            array(
                '_username' => $email,
                '_password' => $password
            )
        );
        return $client;
    }

    public function testIndex()
    {
        $application = $this->getReferenceRepository()->getReference('jazzee.commonbundle.entity.application#0');
        $client = $this->submitLoginForm($application, 'test@example.com', 'password');
        $user = $client->getContainer()->get('security.context')->getToken()->getUser();
        $applicant = $this->getReferenceRepository()->
            getReference('jazzee.commonbundle.entity.application#0applicant#1');
        $this->assertTrue($user instanceof \Jazzee\CommonBundle\Entity\Applicant);
        $this->assertEquals($applicant->getId(), $user->getId());

        $response = $crawler = $client->getResponse();
        $this->assertTrue($response instanceof \Symfony\Component\HttpFoundation\RedirectResponse);
        $redirectTarget = $client->getContainer()->get('router')
            ->generate(
                'jazzee_common_applicationfirstpage',
                array(
                    'programShortName' => $application->getProgram()->getShortName(),
                    'cycleName' => $application->getCycle()->getName()
                ), 
                true
            );
        
        $this->assertTrue($response->isRedirect($redirectTarget));
    }

    public function testWrongApplication()
    {
        $application = $this->getReferenceRepository()->getReference('jazzee.commonbundle.entity.application#2');
        $client = $this->submitLoginForm($application, 'test@example.com', 'password');
        $this->assertNull($client->getContainer()->get('security.context')->getToken());
        
        $response = $crawler = $client->getResponse();
        $this->assertTrue($response instanceof \Symfony\Component\HttpFoundation\RedirectResponse);
        $redirectTarget = $client->getContainer()->get('router')
            ->generate(
                'jazzee_common_applicantlogin',
                array(
                    'programShortName' => $application->getProgram()->getShortName(),
                    'cycleName' => $application->getCycle()->getName()
                ), 
                true
            );
        $this->assertTrue($response->isRedirect($redirectTarget));
    }

    public function testBadPassword()
    {
        $application = $this->getReferenceRepository()->getReference('jazzee.commonbundle.entity.application#0');
        $client = $this->submitLoginForm($application, 'test@example.com', '');
        $this->assertNull($client->getContainer()->get('security.context')->getToken());
        
        $client = $this->submitLoginForm($application, 'test@example.com', 'Password');
        $this->assertNull($client->getContainer()->get('security.context')->getToken());
    }
}

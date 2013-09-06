<?php

namespace Jazzee\CommonBundle\Tests\Controller;

use IC\Bundle\Base\TestBundle\Test\Functional\WebTestCase;

class ApplicationWelcomeTest extends WebTestCase
{

    protected static function getFixtureList()
    {
        return array(
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestApplicationData',
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestCycleData',
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestProgramData'
        );
    }

    public function testIndex()
    {
        $client  = $this->getClient();
        for ($i = 0; $i < 3; $i++) {
            $application = $this->getReferenceRepository()
                ->getReference('jazzee.commonbundle.entity.application#' . $i);

            $crawler = $client->request(
                'GET',
                "/{$application->getProgram()->getShortName()}" .
                "/{$application->getCycle()->getName()}"
            );
            if (!$application->isPublished()) {
                $this->assertTrue($client->getResponse()->isNotFound());
            } else {
                $this->assertSame(
                    $application->getWelcome(),
                    trim($crawler->filter('#content')->text())
                );
            }
        }
    }
}

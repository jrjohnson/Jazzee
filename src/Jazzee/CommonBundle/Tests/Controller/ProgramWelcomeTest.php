<?php

namespace Jazzee\CommonBundle\Tests\Controller;

use IC\Bundle\Base\TestBundle\Test\Functional\WebTestCase;

class ProgramWelcomeTest extends WebTestCase
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
        $program = $this->getReferenceRepository()
                ->getReference('jazzee.commonbundle.entity.program#0');
        $client  = $this->getClient();
        $crawler = $client->request('GET', "/{$program->getShortName()}");
        $this->assertTrue(
            $crawler->filter('html:contains("List of Cycles")')->count() == 1
        );
        $this->assertTrue($crawler->filter('ul')->count() == 1);
        $this->assertTrue(
            $crawler->filter('ul')->eq(0)->filter('li')->count() == 1
        );
        for ($i = 0; $i < 3; $i++) {
            $application = $this->getReferenceRepository()
                ->getReference('jazzee.commonbundle.entity.application#' . $i);
            $cycle = $application->getCycle();
            if (!$application->isPublished()) {
                $this->assertCount(
                    0,
                    $crawler->filter(
                        "html:contains('{$cycle->getName()}')"
                    ),
                    'Unpublished Application listed'
                );
            } elseif ($application->isPublished() and !$application->isVisible()) {
                $this->assertCount(
                    0,
                    $crawler->filter(
                        "html:contains('{$cycle->getName()}')"
                    ),
                    'Invisible Application listed'
                );
            } else {
                $this->assertSame(
                    $application->getCycle()->getName(),
                    trim($crawler->filter('ul > li > a')->eq($i)->text())
                );

                $link = $crawler->selectLink(
                    $cycle->getName()
                )->link();
                $this->assertRegExp(
                    "#/{$program->getShortName()}/{$cycle->getName()}$#",
                    $link->getUri()
                );
            }
        }
    }
}

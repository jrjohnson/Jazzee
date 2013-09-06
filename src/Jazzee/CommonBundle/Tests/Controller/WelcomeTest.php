<?php

namespace Jazzee\CommonBundle\Tests\Controller;

use IC\Bundle\Base\TestBundle\Test\Functional\WebTestCase;

class WelcomeTest extends WebTestCase
{

    protected static function getFixtureList()
    {
        return array(
            'Jazzee\CommonBundle\DataFixtures\ORM\LoadTestProgramData'
        );
    }

    public function testIndex()
    {
        $client = $this->getClient();
        $crawler = $client->request('GET', '/');
        $this->assertCount(
            1,
            $crawler->filter('html:contains("List of Programs")')
        );
        $this->assertTrue($crawler->filter('ul')->count() == 1);
        for ($i = 0; $i < 3; $i++) {
            $program = $this->getReferenceRepository()
                ->getReference('jazzee.commonbundle.entity.program#' . $i);
            if ($program->isExpired()) {
                $this->assertTrue(
                    $crawler->filter("html:contains('{$program->getName()}')")
                        ->count() == 0,
                    'Expired Program listed'
                );
            } else {
                $this->assertGreaterThan(
                    0,
                    $crawler->filter("html:contains('{$program->getName()}')")
                        ->count()
                );
                $this->assertSame(
                    $program->getName(),
                    trim(
                        $crawler->filter("ul > li > a")
                        ->eq($i)->text()
                    )
                );

                $link = $crawler->selectLink($program->getName())->link();
                $this->assertRegExp(
                    "#/{$program->getShortName()}$#",
                    $link->getUri()
                );
            }
        }
    }
}

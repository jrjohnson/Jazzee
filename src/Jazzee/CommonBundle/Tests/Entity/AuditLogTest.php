<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Mockery as m;
use Jazzee\CommonBundle\Entity\AuditLog;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class AuditLogTest extends TestCase
{

    /**
     * @var AuditLog
     */
    protected $object;


    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        m::close();
    }

    /**
    * @covers \Jazzee\CommonBundle\Entity\AuditLog::getId
    */
    public function testGetId()
    {
        $user = m::mock('\Jazzee\CommonBundle\Entity\User');
        $applicant = m::mock('\Jazzee\CommonBundle\Entity\Applicant');
        $object = new AuditLog($user, $applicant, 'some text');
        $expected = rand(1, 100);
        $this->setPropertyOnObject($object, 'id', $expected);
        $this->assertSame($expected, $object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\AuditLog::getCreatedAt
     * @todo   Implement testGetCreatedAt().
     */
    public function testGetCreatedAt()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\AuditLog::getUser
     * @todo   Implement testGetUser().
     */
    public function testGetUser()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\AuditLog::getApplicant
     * @todo   Implement testGetApplicant().
     */
    public function testGetApplicant()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\AuditLog::getText
     * @todo   Implement testGetText().
     */
    public function testGetText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

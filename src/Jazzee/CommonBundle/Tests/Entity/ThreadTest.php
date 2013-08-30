<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Thread;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class ThreadTest extends TestCase
{

    /**
     * @var Thread
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Thread;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Thread::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::setSubject
     * @todo   Implement testSetSubject().
     */
    public function testSetSubject()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getSubject
     * @todo   Implement testGetSubject().
     */
    public function testGetSubject()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::setCreatedAt
     * @todo   Implement testSetCreatedAt().
     */
    public function testSetCreatedAt()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getCreatedAt
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
     * @covers Jazzee\CommonBundle\Entity\Thread::setApplicant
     * @todo   Implement testSetApplicant().
     */
    public function testSetApplicant()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Thread::addMessage
     * @todo   Implement testAddMessage().
     */
    public function testAddMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::hasUnreadMessage
     * @todo   Implement testHasUnreadMessage().
     */
    public function testHasUnreadMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getMessages
     * @todo   Implement testGetMessages().
     */
    public function testGetMessages()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getLastUnreadMessage
     * @todo   Implement testGetLastUnreadMessage().
     */
    public function testGetLastUnreadMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getFirstMessage
     * @todo   Implement testGetFirstMessage().
     */
    public function testGetFirstMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getLastMessage
     * @todo   Implement testGetLastMessage().
     */
    public function testGetLastMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getUnreadMessageCount
     * @todo   Implement testGetUnreadMessageCount().
     */
    public function testGetUnreadMessageCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Thread::getMessageCount
     * @todo   Implement testGetMessageCount().
     */
    public function testGetMessageCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

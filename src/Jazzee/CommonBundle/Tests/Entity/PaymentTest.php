<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Payment;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class PaymentTest extends TestCase
{

    /**
     * @var Payment
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Payment;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Payment::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::setAnswer
     * @todo   Implement testSetAnswer().
     */
    public function testSetAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getAnswer
     * @todo   Implement testGetAnswer().
     */
    public function testGetAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::setAmount
     * @todo   Implement testSetAmount().
     */
    public function testSetAmount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getAmount
     * @todo   Implement testGetAmount().
     */
    public function testGetAmount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getStatus
     * @todo   Implement testGetStatus().
     */
    public function testGetStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::setType
     * @todo   Implement testSetType().
     */
    public function testSetType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getType
     * @todo   Implement testGetType().
     */
    public function testGetType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getVariables
     * @todo   Implement testGetVariables().
     */
    public function testGetVariables()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::addVariable
     * @todo   Implement testAddVariable().
     */
    public function testAddVariable()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::pending
     * @todo   Implement testPending().
     */
    public function testPending()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::settled
     * @todo   Implement testSettled().
     */
    public function testSettled()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::rejected
     * @todo   Implement testRejected().
     */
    public function testRejected()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::refunded
     * @todo   Implement testRefunded().
     */
    public function testRefunded()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::setVar
     * @todo   Implement testSetVar().
     */
    public function testSetVar()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Payment::getVar
     * @todo   Implement testGetVar().
     */
    public function testGetVar()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

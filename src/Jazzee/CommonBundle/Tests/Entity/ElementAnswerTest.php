<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\ElementAnswer;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class ElementAnswerTest extends TestCase
{

    /**
     * @var ElementAnswer
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ElementAnswer;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\ElementAnswer::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setPosition
     * @todo   Implement testSetPosition().
     */
    public function testSetPosition()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getPosition
     * @todo   Implement testGetPosition().
     */
    public function testGetPosition()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEShortString
     * @todo   Implement testSetEShortString().
     */
    public function testSetEShortString()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEShortString
     * @todo   Implement testGetEShortString().
     */
    public function testGetEShortString()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEText
     * @todo   Implement testSetEText().
     */
    public function testSetEText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEText
     * @todo   Implement testGetEText().
     */
    public function testGetEText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEDate
     * @todo   Implement testSetEDate().
     */
    public function testSetEDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEDate
     * @todo   Implement testGetEDate().
     */
    public function testGetEDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEInteger
     * @todo   Implement testSetEInteger().
     */
    public function testSetEInteger()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEInteger
     * @todo   Implement testGetEInteger().
     */
    public function testGetEInteger()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEDecimal
     * @todo   Implement testSetEDecimal().
     */
    public function testSetEDecimal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEDecimal
     * @todo   Implement testGetEDecimal().
     */
    public function testGetEDecimal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setEBlob
     * @todo   Implement testSetEBlob().
     */
    public function testSetEBlob()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getEBlob
     * @todo   Implement testGetEBlob().
     */
    public function testGetEBlob()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setElement
     * @todo   Implement testSetElement().
     */
    public function testSetElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getElement
     * @todo   Implement testGetElement().
     */
    public function testGetElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::setAnswer
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
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::getAnswer
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
     * @covers Jazzee\CommonBundle\Entity\ElementAnswer::preRemove
     * @todo   Implement testPreRemove().
     */
    public function testPreRemove()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

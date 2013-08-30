<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Page;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class PageTest extends TestCase
{

    /**
     * @var Page
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Page;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Page::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getUuid
     * @todo   Implement testGetUuid().
     */
    public function testGetUuid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setUuid
     * @todo   Implement testSetUuid().
     */
    public function testSetUuid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::tempId
     * @todo   Implement testTempId().
     */
    public function testTempId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::replaceUuid
     * @todo   Implement testReplaceUuid().
     */
    public function testReplaceUuid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setTitle
     * @todo   Implement testSetTitle().
     */
    public function testSetTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getTitle
     * @todo   Implement testGetTitle().
     */
    public function testGetTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::makeGlobal
     * @todo   Implement testMakeGlobal().
     */
    public function testMakeGlobal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::notGlobal
     * @todo   Implement testNotGlobal().
     */
    public function testNotGlobal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::isGlobal
     * @todo   Implement testIsGlobal().
     */
    public function testIsGlobal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setMin
     * @todo   Implement testSetMin().
     */
    public function testSetMin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getMin
     * @todo   Implement testGetMin().
     */
    public function testGetMin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setMax
     * @todo   Implement testSetMax().
     */
    public function testSetMax()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getMax
     * @todo   Implement testGetMax().
     */
    public function testGetMax()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::required
     * @todo   Implement testRequired().
     */
    public function testRequired()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::optional
     * @todo   Implement testOptional().
     */
    public function testOptional()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::isRequired
     * @todo   Implement testIsRequired().
     */
    public function testIsRequired()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::showAnswerStatus
     * @todo   Implement testShowAnswerStatus().
     */
    public function testShowAnswerStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::hideAnswerStatus
     * @todo   Implement testHideAnswerStatus().
     */
    public function testHideAnswerStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::answerStatusDisplay
     * @todo   Implement testAnswerStatusDisplay().
     */
    public function testAnswerStatusDisplay()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setInstructions
     * @todo   Implement testSetInstructions().
     */
    public function testSetInstructions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getInstructions
     * @todo   Implement testGetInstructions().
     */
    public function testGetInstructions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setLeadingText
     * @todo   Implement testSetLeadingText().
     */
    public function testSetLeadingText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getLeadingText
     * @todo   Implement testGetLeadingText().
     */
    public function testGetLeadingText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setTrailingText
     * @todo   Implement testSetTrailingText().
     */
    public function testSetTrailingText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getTrailingText
     * @todo   Implement testGetTrailingText().
     */
    public function testGetTrailingText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setType
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
     * @covers Jazzee\CommonBundle\Entity\Page::getType
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
     * @covers Jazzee\CommonBundle\Entity\Page::getParent
     * @todo   Implement testGetParent().
     */
    public function testGetParent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setParent
     * @todo   Implement testSetParent().
     */
    public function testSetParent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::addChild
     * @todo   Implement testAddChild().
     */
    public function testAddChild()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getChildren
     * @todo   Implement testGetChildren().
     */
    public function testGetChildren()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getChildById
     * @todo   Implement testGetChildById().
     */
    public function testGetChildById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getChildByFixedId
     * @todo   Implement testGetChildByFixedId().
     */
    public function testGetChildByFixedId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setVar
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
     * @covers Jazzee\CommonBundle\Entity\Page::getVar
     * @todo   Implement testGetVar().
     */
    public function testGetVar()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getVariables
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
     * @covers Jazzee\CommonBundle\Entity\Page::addElement
     * @todo   Implement testAddElement().
     */
    public function testAddElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getElements
     * @todo   Implement testGetElements().
     */
    public function testGetElements()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getElementById
     * @todo   Implement testGetElementById().
     */
    public function testGetElementById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getElementByTitle
     * @todo   Implement testGetElementByTitle().
     */
    public function testGetElementByTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getElementByName
     * @todo   Implement testGetElementByName().
     */
    public function testGetElementByName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getElementByFixedId
     * @todo   Implement testGetElementByFixedId().
     */
    public function testGetElementByFixedId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getApplicationPageJazzeePage
     * @todo   Implement testGetApplicationPageJazzeePage().
     */
    public function testGetApplicationPageJazzeePage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getFakeApplicationPage
     * @todo   Implement testGetFakeApplicationPage().
     */
    public function testGetFakeApplicationPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::setFixedId
     * @todo   Implement testSetFixedId().
     */
    public function testSetFixedId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getFixedId
     * @todo   Implement testGetFixedId().
     */
    public function testGetFixedId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Page::getApplicationPages
     * @todo   Implement testGetApplicationPages().
     */
    public function testGetApplicationPages()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

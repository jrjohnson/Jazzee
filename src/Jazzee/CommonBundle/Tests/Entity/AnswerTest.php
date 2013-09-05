<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Answer;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class AnswerTest extends TestCase
{

    /**
     * @var Answer
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Answer;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers \Jazzee\CommonBundle\Entity\Answer::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setAttachment
     * @todo   Implement testSetAttachment().
     */
    public function testSetAttachment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getAttachment
     * @todo   Implement testGetAttachment().
     */
    public function testGetAttachment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setPage
     * @todo   Implement testSetPage().
     */
    public function testSetPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getPage
     * @todo   Implement testGetPage().
     */
    public function testGetPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::generateUniqueId
     * @todo   Implement testGenerateUniqueId().
     */
    public function testGenerateUniqueId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setUniqueId
     * @todo   Implement testSetUniqueId().
     */
    public function testSetUniqueId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getUniqueId
     * @todo   Implement testGetUniqueId().
     */
    public function testGetUniqueId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::lock
     * @todo   Implement testLock().
     */
    public function testLock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::unlock
     * @todo   Implement testUnlock().
     */
    public function testUnlock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::isLocked
     * @todo   Implement testIsLocked().
     */
    public function testIsLocked()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setUpdatedAt
     * @todo   Implement testSetUpdatedAt().
     */
    public function testSetUpdatedAt()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getUpdatedAt
     * @todo   Implement testGetUpdatedAt().
     */
    public function testGetUpdatedAt()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Answer::getApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Answer::setParent
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
     * @covers Jazzee\CommonBundle\Entity\Answer::getParent
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
     * @covers Jazzee\CommonBundle\Entity\Answer::addChild
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
     * @covers Jazzee\CommonBundle\Entity\Answer::getChildren
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
     * @covers Jazzee\CommonBundle\Entity\Answer::getChildByPage
     * @todo   Implement testGetChildByPage().
     */
    public function testGetChildByPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::addElementAnswer
     * @todo   Implement testAddElementAnswer().
     */
    public function testAddElementAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getElementAnswers
     * @todo   Implement testGetElementAnswers().
     */
    public function testGetElementAnswers()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getElementAnswersForElement
     * @todo   Implement testGetElementAnswersForElement().
     */
    public function testGetElementAnswersForElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getElementAnswersForElementByPosition
     * @todo   Implement testGetElementAnswersForElementByPosition().
     */
    public function testGetElementAnswersForElementByPosition()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setPublicStatus
     * @todo   Implement testSetPublicStatus().
     */
    public function testSetPublicStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getPublicStatus
     * @todo   Implement testGetPublicStatus().
     */
    public function testGetPublicStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::clearPublicStatus
     * @todo   Implement testClearPublicStatus().
     */
    public function testClearPublicStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setPrivateStatus
     * @todo   Implement testSetPrivateStatus().
     */
    public function testSetPrivateStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getPrivateStatus
     * @todo   Implement testGetPrivateStatus().
     */
    public function testGetPrivateStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::clearPrivateStatus
     * @todo   Implement testClearPrivateStatus().
     */
    public function testClearPrivateStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::markLastUpdate
     * @todo   Implement testMarkLastUpdate().
     */
    public function testMarkLastUpdate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getPayment
     * @todo   Implement testGetPayment().
     */
    public function testGetPayment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setPayment
     * @todo   Implement testSetPayment().
     */
    public function testSetPayment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getGREScore
     * @todo   Implement testGetGREScore().
     */
    public function testGetGREScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setGREScore
     * @todo   Implement testSetGREScore().
     */
    public function testSetGREScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getTOEFLScore
     * @todo   Implement testGetTOEFLScore().
     */
    public function testGetTOEFLScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setTOEFLScore
     * @todo   Implement testSetTOEFLScore().
     */
    public function testSetTOEFLScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setSchool
     * @todo   Implement testSetSchool().
     */
    public function testSetSchool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::removeSchool
     * @todo   Implement testRemoveSchool().
     */
    public function testRemoveSchool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getSchool
     * @todo   Implement testGetSchool().
     */
    public function testGetSchool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getMatchedScore
     * @todo   Implement testGetMatchedScore().
     */
    public function testGetMatchedScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::setPageStatus
     * @todo   Implement testSetPageStatus().
     */
    public function testSetPageStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Answer::getPageStatus
     * @todo   Implement testGetPageStatus().
     */
    public function testGetPageStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

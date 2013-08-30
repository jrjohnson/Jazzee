<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\ApplicationPage;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class ApplicationPageTest extends TestCase
{

    /**
     * @var ApplicationPage
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ApplicationPage;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\ApplicationPage::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setApplication
     * @todo   Implement testSetApplication().
     */
    public function testSetApplication()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getApplication
     * @todo   Implement testGetApplication().
     */
    public function testGetApplication()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setPage
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getPage
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getKind
     * @todo   Implement testGetKind().
     */
    public function testGetKind()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setKind
     * @todo   Implement testSetKind().
     */
    public function testSetKind()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::checkConstraints
     * @todo   Implement testCheckConstraints().
     */
    public function testCheckConstraints()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getWeight
     * @todo   Implement testGetWeight().
     */
    public function testGetWeight()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setWeight
     * @todo   Implement testSetWeight().
     */
    public function testSetWeight()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getTitle
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setTitle
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getName
     * @todo   Implement testGetName().
     */
    public function testGetName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setName
     * @todo   Implement testSetName().
     */
    public function testSetName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getMin
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setMin
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getMax
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setMax
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::isRequired
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::required
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::optional
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::showAnswerStatus
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::hideAnswerStatus
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::answerStatusDisplay
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getInstructions
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setInstructions
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getLeadingText
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setLeadingText
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getTrailingText
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::setTrailingText
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
     * @covers Jazzee\CommonBundle\Entity\ApplicationPage::getJazzeePage
     * @todo   Implement testGetJazzeePage().
     */
    public function testGetJazzeePage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

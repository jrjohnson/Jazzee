<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Application;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class ApplicationTest extends TestCase
{

    /**
     * @var Application
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Application;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Application::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setContactName
     * @todo   Implement testSetContactName().
     */
    public function testSetContactName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getContactName
     * @todo   Implement testGetContactName().
     */
    public function testGetContactName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setContactEmail
     * @todo   Implement testSetContactEmail().
     */
    public function testSetContactEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getContactEmail
     * @todo   Implement testGetContactEmail().
     */
    public function testGetContactEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setWelcome
     * @todo   Implement testSetWelcome().
     */
    public function testSetWelcome()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getWelcome
     * @todo   Implement testGetWelcome().
     */
    public function testGetWelcome()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setOpen
     * @todo   Implement testSetOpen().
     */
    public function testSetOpen()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getOpen
     * @todo   Implement testGetOpen().
     */
    public function testGetOpen()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setClose
     * @todo   Implement testSetClose().
     */
    public function testSetClose()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getClose
     * @todo   Implement testGetClose().
     */
    public function testGetClose()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setBegin
     * @todo   Implement testSetBegin().
     */
    public function testSetBegin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getBegin
     * @todo   Implement testGetBegin().
     */
    public function testGetBegin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::publish
     * @todo   Implement testPublish().
     */
    public function testPublish()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::canPublish
     * @todo   Implement testCanPublish().
     */
    public function testCanPublish()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::shouldPublish
     * @todo   Implement testShouldPublish().
     */
    public function testShouldPublish()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::unPublish
     * @todo   Implement testUnPublish().
     */
    public function testUnPublish()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::isPublished
     * @todo   Implement testIsPublished().
     */
    public function testIsPublished()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::visible
     * @todo   Implement testVisible().
     */
    public function testVisible()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::inVisible
     * @todo   Implement testInVisible().
     */
    public function testInVisible()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::isVisible
     * @todo   Implement testIsVisible().
     */
    public function testIsVisible()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::byInvitationOnly
     * @todo   Implement testByInvitationOnly().
     */
    public function testByInvitationOnly()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::notByInvitationOnly
     * @todo   Implement testNotByInvitationOnly().
     */
    public function testNotByInvitationOnly()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::isByInvitationOnly
     * @todo   Implement testIsByInvitationOnly().
     */
    public function testIsByInvitationOnly()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setAdmitLetter
     * @todo   Implement testSetAdmitLetter().
     */
    public function testSetAdmitLetter()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getAdmitLetter
     * @todo   Implement testGetAdmitLetter().
     */
    public function testGetAdmitLetter()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setDenyLetter
     * @todo   Implement testSetDenyLetter().
     */
    public function testSetDenyLetter()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getDenyLetter
     * @todo   Implement testGetDenyLetter().
     */
    public function testGetDenyLetter()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusIncompleteText
     * @todo   Implement testSetStatusIncompleteText().
     */
    public function testSetStatusIncompleteText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusIncompleteText
     * @todo   Implement testGetStatusIncompleteText().
     */
    public function testGetStatusIncompleteText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusDeactivatedText
     * @todo   Implement testSetStatusDeactivatedText().
     */
    public function testSetStatusDeactivatedText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusDeactivatedText
     * @todo   Implement testGetStatusDeactivatedText().
     */
    public function testGetStatusDeactivatedText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusNoDecisionText
     * @todo   Implement testSetStatusNoDecisionText().
     */
    public function testSetStatusNoDecisionText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusNoDecisionText
     * @todo   Implement testGetStatusNoDecisionText().
     */
    public function testGetStatusNoDecisionText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusAdmitText
     * @todo   Implement testSetStatusAdmitText().
     */
    public function testSetStatusAdmitText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusAdmitText
     * @todo   Implement testGetStatusAdmitText().
     */
    public function testGetStatusAdmitText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusDenyText
     * @todo   Implement testSetStatusDenyText().
     */
    public function testSetStatusDenyText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusDenyText
     * @todo   Implement testGetStatusDenyText().
     */
    public function testGetStatusDenyText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusAcceptText
     * @todo   Implement testSetStatusAcceptText().
     */
    public function testSetStatusAcceptText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusAcceptText
     * @todo   Implement testGetStatusAcceptText().
     */
    public function testGetStatusAcceptText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setStatusDeclineText
     * @todo   Implement testSetStatusDeclineText().
     */
    public function testSetStatusDeclineText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getStatusDeclineText
     * @todo   Implement testGetStatusDeclineText().
     */
    public function testGetStatusDeclineText()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setProgram
     * @todo   Implement testSetProgram().
     */
    public function testSetProgram()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getProgram
     * @todo   Implement testGetProgram().
     */
    public function testGetProgram()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setCycle
     * @todo   Implement testSetCycle().
     */
    public function testSetCycle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getCycle
     * @todo   Implement testGetCycle().
     */
    public function testGetCycle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicants
     * @todo   Implement testGetApplicants().
     */
    public function testGetApplicants()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPages
     * @todo   Implement testGetApplicationPages().
     */
    public function testGetApplicationPages()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::hasPage
     * @todo   Implement testHasPage().
     */
    public function testHasPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPageByPageId
     * @todo   Implement testGetApplicationPageByPageId().
     */
    public function testGetApplicationPageByPageId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPageById
     * @todo   Implement testGetApplicationPageById().
     */
    public function testGetApplicationPageById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPageByTitle
     * @todo   Implement testGetApplicationPageByTitle().
     */
    public function testGetApplicationPageByTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPageByName
     * @todo   Implement testGetApplicationPageByName().
     */
    public function testGetApplicationPageByName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getElementById
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
     * @covers Jazzee\CommonBundle\Entity\Application::getApplicationPageByChildPageId
     * @todo   Implement testGetApplicationPageByChildPageId().
     */
    public function testGetApplicationPageByChildPageId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::compareWith
     * @todo   Implement testCompareWith().
     */
    public function testCompareWith()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::formatApplicantArray
     * @todo   Implement testFormatApplicantArray().
     */
    public function testFormatApplicantArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::formatApplicantDisplayArray
     * @todo   Implement testFormatApplicantDisplayArray().
     */
    public function testFormatApplicantDisplayArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::formatApplicantPDFTemplateArray
     * @todo   Implement testFormatApplicantPDFTemplateArray().
     */
    public function testFormatApplicantPDFTemplateArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getTemplates
     * @todo   Implement testGetTemplates().
     */
    public function testGetTemplates()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::addTemplate
     * @todo   Implement testAddTemplate().
     */
    public function testAddTemplate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getTemplateById
     * @todo   Implement testGetTemplateById().
     */
    public function testGetTemplateById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::clearCache
     * @todo   Implement testClearCache().
     */
    public function testClearCache()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::setExternalIdValidationExpression
     * @todo   Implement testSetExternalIdValidationExpression().
     */
    public function testSetExternalIdValidationExpression()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::getExternalIdValidationExpression
     * @todo   Implement testGetExternalIdValidationExpression().
     */
    public function testGetExternalIdValidationExpression()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Application::validateExternalId
     * @todo   Implement testValidateExternalId().
     */
    public function testValidateExternalId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

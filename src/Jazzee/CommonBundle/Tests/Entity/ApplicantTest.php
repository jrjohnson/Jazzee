<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Applicant;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class ApplicantTest extends TestCase
{

    /**
     * @var Applicant
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Applicant;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Applicant::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setEmail
     * @todo   Implement testSetEmail().
     */
    public function testSetEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getEmail
     * @todo   Implement testGetEmail().
     */
    public function testGetEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setPassword
     * @todo   Implement testSetPassword().
     */
    public function testSetPassword()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setHashedPassword
     * @todo   Implement testSetHashedPassword().
     */
    public function testSetHashedPassword()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getPassword
     * @todo   Implement testGetPassword().
     */
    public function testGetPassword()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::checkPassword
     * @todo   Implement testCheckPassword().
     */
    public function testCheckPassword()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::generateUniqueId
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::setUniqueId
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::getUniqueId
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::generatePassword
     * @todo   Implement testGeneratePassword().
     */
    public function testGeneratePassword()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setExternalId
     * @todo   Implement testSetExternalId().
     */
    public function testSetExternalId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getExternalId
     * @todo   Implement testGetExternalId().
     */
    public function testGetExternalId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::lock
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::unLock
     * @todo   Implement testUnLock().
     */
    public function testUnLock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::isLocked
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::setFirstName
     * @todo   Implement testSetFirstName().
     */
    public function testSetFirstName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getFirstName
     * @todo   Implement testGetFirstName().
     */
    public function testGetFirstName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setMiddleName
     * @todo   Implement testSetMiddleName().
     */
    public function testSetMiddleName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getMiddleName
     * @todo   Implement testGetMiddleName().
     */
    public function testGetMiddleName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setLastName
     * @todo   Implement testSetLastName().
     */
    public function testSetLastName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getLastName
     * @todo   Implement testGetLastName().
     */
    public function testGetLastName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setSuffix
     * @todo   Implement testSetSuffix().
     */
    public function testSetSuffix()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getSuffix
     * @todo   Implement testGetSuffix().
     */
    public function testGetSuffix()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getFullName
     * @todo   Implement testGetFullName().
     */
    public function testGetFullName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setDeadlineExtension
     * @todo   Implement testSetDeadlineExtension().
     */
    public function testSetDeadlineExtension()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getDeadlineExtension
     * @todo   Implement testGetDeadlineExtension().
     */
    public function testGetDeadlineExtension()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::removeDeadlineExtension
     * @todo   Implement testRemoveDeadlineExtension().
     */
    public function testRemoveDeadlineExtension()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::login
     * @todo   Implement testLogin().
     */
    public function testLogin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setLastLogin
     * @todo   Implement testSetLastLogin().
     */
    public function testSetLastLogin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getLastLogin
     * @todo   Implement testGetLastLogin().
     */
    public function testGetLastLogin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getLastLoginIp
     * @todo   Implement testGetLastLoginIp().
     */
    public function testGetLastLoginIp()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getLastFailedLoginIp
     * @todo   Implement testGetLastFailedLoginIp().
     */
    public function testGetLastFailedLoginIp()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::loginFail
     * @todo   Implement testLoginFail().
     */
    public function testLoginFail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getFailedLoginAttempts
     * @todo   Implement testGetFailedLoginAttempts().
     */
    public function testGetFailedLoginAttempts()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setCreatedAt
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::getCreatedAt
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::markLastUpdate
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::setUpdatedAt
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::getUpdatedAt
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::setApplication
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::getApplication
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
     * @covers Jazzee\CommonBundle\Entity\Applicant::addAnswer
     * @todo   Implement testAddAnswer().
     */
    public function testAddAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getAnswers
     * @todo   Implement testGetAnswers().
     */
    public function testGetAnswers()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::findAnswersByPage
     * @todo   Implement testFindAnswersByPage().
     */
    public function testFindAnswersByPage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::findAnswerById
     * @todo   Implement testFindAnswerById().
     */
    public function testFindAnswerById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::addAttachment
     * @todo   Implement testAddAttachment().
     */
    public function testAddAttachment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::removeAttachment
     * @todo   Implement testRemoveAttachment().
     */
    public function testRemoveAttachment()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getAttachments
     * @todo   Implement testGetAttachments().
     */
    public function testGetAttachments()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::setDecision
     * @todo   Implement testSetDecision().
     */
    public function testSetDecision()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getDecision
     * @todo   Implement testGetDecision().
     */
    public function testGetDecision()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::addTag
     * @todo   Implement testAddTag().
     */
    public function testAddTag()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::removeTag
     * @todo   Implement testRemoveTag().
     */
    public function testRemoveTag()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getTags
     * @todo   Implement testGetTags().
     */
    public function testGetTags()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::hasTag
     * @todo   Implement testHasTag().
     */
    public function testHasTag()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::addThread
     * @todo   Implement testAddThread().
     */
    public function testAddThread()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getThreads
     * @todo   Implement testGetThreads().
     */
    public function testGetThreads()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getDuplicates
     * @todo   Implement testGetDuplicates().
     */
    public function testGetDuplicates()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getDuplicateById
     * @todo   Implement testGetDuplicateById().
     */
    public function testGetDuplicateById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getAuditLogs
     * @todo   Implement testGetAuditLogs().
     */
    public function testGetAuditLogs()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::unreadMessageCount
     * @todo   Implement testUnreadMessageCount().
     */
    public function testUnreadMessageCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getPercentComplete
     * @todo   Implement testGetPercentComplete().
     */
    public function testGetPercentComplete()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::hasPaid
     * @todo   Implement testHasPaid().
     */
    public function testHasPaid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::deactivate
     * @todo   Implement testDeactivate().
     */
    public function testDeactivate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::activate
     * @todo   Implement testActivate().
     */
    public function testActivate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::isDeactivated
     * @todo   Implement testIsDeactivated().
     */
    public function testIsDeactivated()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::getDeadline
     * @todo   Implement testGetDeadline().
     */
    public function testGetDeadline()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Applicant::toXml
     * @todo   Implement testToXml().
     */
    public function testToXml()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\TOEFLScore;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class TOEFLScoreTest extends TestCase
{

    /**
     * @var TOEFLScore
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TOEFLScore;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\TOEFLScore::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setRegistrationNumber
     * @todo   Implement testSetRegistrationNumber().
     */
    public function testSetRegistrationNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getRegistrationNumber
     * @todo   Implement testGetRegistrationNumber().
     */
    public function testGetRegistrationNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setDepartmentCode
     * @todo   Implement testSetDepartmentCode().
     */
    public function testSetDepartmentCode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getDepartmentCode
     * @todo   Implement testGetDepartmentCode().
     */
    public function testGetDepartmentCode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setFirstName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getFirstName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setMiddleName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getMiddleName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setLastName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getLastName
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
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setBirthDate
     * @todo   Implement testSetBirthDate().
     */
    public function testSetBirthDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getBirthDate
     * @todo   Implement testGetBirthDate().
     */
    public function testGetBirthDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setGender
     * @todo   Implement testSetGender().
     */
    public function testSetGender()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getGender
     * @todo   Implement testGetGender().
     */
    public function testGetGender()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setNativeCountry
     * @todo   Implement testSetNativeCountry().
     */
    public function testSetNativeCountry()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getNativeCountry
     * @todo   Implement testGetNativeCountry().
     */
    public function testGetNativeCountry()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setNativeLanguage
     * @todo   Implement testSetNativeLanguage().
     */
    public function testSetNativeLanguage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getNativeLanguage
     * @todo   Implement testGetNativeLanguage().
     */
    public function testGetNativeLanguage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setTestDate
     * @todo   Implement testSetTestDate().
     */
    public function testSetTestDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getTestDate
     * @todo   Implement testGetTestDate().
     */
    public function testGetTestDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setTestType
     * @todo   Implement testSetTestType().
     */
    public function testSetTestType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getTestType
     * @todo   Implement testGetTestType().
     */
    public function testGetTestType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setListeningIndicator
     * @todo   Implement testSetListeningIndicator().
     */
    public function testSetListeningIndicator()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getListeningIndicator
     * @todo   Implement testGetListeningIndicator().
     */
    public function testGetListeningIndicator()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setSpeakingIndicator
     * @todo   Implement testSetSpeakingIndicator().
     */
    public function testSetSpeakingIndicator()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getSpeakingIndicator
     * @todo   Implement testGetSpeakingIndicator().
     */
    public function testGetSpeakingIndicator()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setIBTListening
     * @todo   Implement testSetIBTListening().
     */
    public function testSetIBTListening()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getIBTListening
     * @todo   Implement testGetIBTListening().
     */
    public function testGetIBTListening()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setIBTWriting
     * @todo   Implement testSetIBTWriting().
     */
    public function testSetIBTWriting()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getIBTWriting
     * @todo   Implement testGetIBTWriting().
     */
    public function testGetIBTWriting()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setIBTSpeaking
     * @todo   Implement testSetIBTSpeaking().
     */
    public function testSetIBTSpeaking()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getIBTSpeaking
     * @todo   Implement testGetIBTSpeaking().
     */
    public function testGetIBTSpeaking()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setIBTReading
     * @todo   Implement testSetIBTReading().
     */
    public function testSetIBTReading()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getIBTReading
     * @todo   Implement testGetIBTReading().
     */
    public function testGetIBTReading()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setIBTTotal
     * @todo   Implement testSetIBTTotal().
     */
    public function testSetIBTTotal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getIBTTotal
     * @todo   Implement testGetIBTTotal().
     */
    public function testGetIBTTotal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setTSEScore
     * @todo   Implement testSetTSEScore().
     */
    public function testSetTSEScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getTSEScore
     * @todo   Implement testGetTSEScore().
     */
    public function testGetTSEScore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setListening
     * @todo   Implement testSetListening().
     */
    public function testSetListening()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getListening
     * @todo   Implement testGetListening().
     */
    public function testGetListening()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setWriting
     * @todo   Implement testSetWriting().
     */
    public function testSetWriting()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getWriting
     * @todo   Implement testGetWriting().
     */
    public function testGetWriting()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setReading
     * @todo   Implement testSetReading().
     */
    public function testSetReading()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getReading
     * @todo   Implement testGetReading().
     */
    public function testGetReading()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setEssay
     * @todo   Implement testSetEssay().
     */
    public function testSetEssay()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getEssay
     * @todo   Implement testGetEssay().
     */
    public function testGetEssay()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setTotal
     * @todo   Implement testSetTotal().
     */
    public function testSetTotal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getTotal
     * @todo   Implement testGetTotal().
     */
    public function testGetTotal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setTimesTaken
     * @todo   Implement testSetTimesTaken().
     */
    public function testSetTimesTaken()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getTimesTaken
     * @todo   Implement testGetTimesTaken().
     */
    public function testGetTimesTaken()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::setOffTopic
     * @todo   Implement testSetOffTopic().
     */
    public function testSetOffTopic()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getOffTopic
     * @todo   Implement testGetOffTopic().
     */
    public function testGetOffTopic()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\TOEFLScore::getSummary
     * @todo   Implement testGetSummary().
     */
    public function testGetSummary()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

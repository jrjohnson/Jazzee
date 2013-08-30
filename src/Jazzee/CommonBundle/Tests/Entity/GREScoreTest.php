<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\GREScore;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class GREScoreTest extends TestCase
{

    /**
     * @var GREScore
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new GREScore;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\GREScore::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setRegistrationNumber
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getRegistrationNumber
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setDepartmentCode
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getDepartmentCode
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setDepartmentName
     * @todo   Implement testSetDepartmentName().
     */
    public function testSetDepartmentName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getDepartmentName
     * @todo   Implement testGetDepartmentName().
     */
    public function testGetDepartmentName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setFirstName
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getFirstName
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setMiddleInitial
     * @todo   Implement testSetMiddleInitial().
     */
    public function testSetMiddleInitial()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getMiddleInitial
     * @todo   Implement testGetMiddleInitial().
     */
    public function testGetMiddleInitial()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setLastName
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getLastName
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setBirthDate
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getBirthDate
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setGender
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getGender
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setTestDate
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::getTestDate
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
     * @covers Jazzee\CommonBundle\Entity\GREScore::setTestCode
     * @todo   Implement testSetTestCode().
     */
    public function testSetTestCode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getTestCode
     * @todo   Implement testGetTestCode().
     */
    public function testGetTestCode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setTestName
     * @todo   Implement testSetTestName().
     */
    public function testSetTestName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getTestName
     * @todo   Implement testGetTestName().
     */
    public function testGetTestName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setScore1Type
     * @todo   Implement testSetScore1Type().
     */
    public function testSetScore1Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getScore1Type
     * @todo   Implement testGetScore1Type().
     */
    public function testGetScore1Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setScore1Converted
     * @todo   Implement testSetScore1Converted().
     */
    public function testSetScore1Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getScore1Converted
     * @todo   Implement testGetScore1Converted().
     */
    public function testGetScore1Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setScore1Percentile
     * @todo   Implement testSetScore1Percentile().
     */
    public function testSetScore1Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getScore1Percentile
     * @todo   Implement testGetScore1Percentile().
     */
    public function testGetScore1Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore2Type
     * @todo   Implement testSetscore2Type().
     */
    public function testSetscore2Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore2Type
     * @todo   Implement testGetscore2Type().
     */
    public function testGetscore2Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore2Converted
     * @todo   Implement testSetscore2Converted().
     */
    public function testSetscore2Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore2Converted
     * @todo   Implement testGetscore2Converted().
     */
    public function testGetscore2Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore2Percentile
     * @todo   Implement testSetscore2Percentile().
     */
    public function testSetscore2Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore2Percentile
     * @todo   Implement testGetscore2Percentile().
     */
    public function testGetscore2Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore3Type
     * @todo   Implement testSetscore3Type().
     */
    public function testSetscore3Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore3Type
     * @todo   Implement testGetscore3Type().
     */
    public function testGetscore3Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore3Converted
     * @todo   Implement testSetscore3Converted().
     */
    public function testSetscore3Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore3Converted
     * @todo   Implement testGetscore3Converted().
     */
    public function testGetscore3Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore3Percentile
     * @todo   Implement testSetscore3Percentile().
     */
    public function testSetscore3Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore3Percentile
     * @todo   Implement testGetscore3Percentile().
     */
    public function testGetscore3Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore4Type
     * @todo   Implement testSetscore4Type().
     */
    public function testSetscore4Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore4Type
     * @todo   Implement testGetscore4Type().
     */
    public function testGetscore4Type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore4Converted
     * @todo   Implement testSetscore4Converted().
     */
    public function testSetscore4Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore4Converted
     * @todo   Implement testGetscore4Converted().
     */
    public function testGetscore4Converted()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setscore4Percentile
     * @todo   Implement testSetscore4Percentile().
     */
    public function testSetscore4Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getscore4Percentile
     * @todo   Implement testGetscore4Percentile().
     */
    public function testGetscore4Percentile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setSequenceNumber
     * @todo   Implement testSetSequenceNumber().
     */
    public function testSetSequenceNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getSequenceNumber
     * @todo   Implement testGetSequenceNumber().
     */
    public function testGetSequenceNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setRecordSerialNumber
     * @todo   Implement testSetRecordSerialNumber().
     */
    public function testSetRecordSerialNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getRecordSerialNumber
     * @todo   Implement testGetRecordSerialNumber().
     */
    public function testGetRecordSerialNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setCycleNumber
     * @todo   Implement testSetCycleNumber().
     */
    public function testSetCycleNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getCycleNumber
     * @todo   Implement testGetCycleNumber().
     */
    public function testGetCycleNumber()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::setProcessDate
     * @todo   Implement testSetProcessDate().
     */
    public function testSetProcessDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getProcessDate
     * @todo   Implement testGetProcessDate().
     */
    public function testGetProcessDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\GREScore::getSummary
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

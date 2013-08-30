<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\User;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class UserTest extends TestCase
{

    /**
     * @var User
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new User;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\User::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setUniqueName
     * @todo   Implement testSetUniqueName().
     */
    public function testSetUniqueName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getUniqueName
     * @todo   Implement testGetUniqueName().
     */
    public function testGetUniqueName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setEmail
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
     * @covers Jazzee\CommonBundle\Entity\User::getEmail
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
     * @covers Jazzee\CommonBundle\Entity\User::setFirstName
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
     * @covers Jazzee\CommonBundle\Entity\User::getFirstName
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
     * @covers Jazzee\CommonBundle\Entity\User::setLastName
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
     * @covers Jazzee\CommonBundle\Entity\User::getLastName
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
     * @covers Jazzee\CommonBundle\Entity\User::generateApiKey
     * @todo   Implement testGenerateApiKey().
     */
    public function testGenerateApiKey()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getApiKey
     * @todo   Implement testGetApiKey().
     */
    public function testGetApiKey()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setApiKey
     * @todo   Implement testSetApiKey().
     */
    public function testSetApiKey()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::isActive
     * @todo   Implement testIsActive().
     */
    public function testIsActive()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::activate
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
     * @covers Jazzee\CommonBundle\Entity\User::deActivate
     * @todo   Implement testDeActivate().
     */
    public function testDeActivate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setDefaultProgram
     * @todo   Implement testSetDefaultProgram().
     */
    public function testSetDefaultProgram()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getDefaultProgram
     * @todo   Implement testGetDefaultProgram().
     */
    public function testGetDefaultProgram()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setDefaultCycle
     * @todo   Implement testSetDefaultCycle().
     */
    public function testSetDefaultCycle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getDefaultCycle
     * @todo   Implement testGetDefaultCycle().
     */
    public function testGetDefaultCycle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::addRole
     * @todo   Implement testAddRole().
     */
    public function testAddRole()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getRoles
     * @todo   Implement testGetRoles().
     */
    public function testGetRoles()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::hasRole
     * @todo   Implement testHasRole().
     */
    public function testHasRole()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::addLog
     * @todo   Implement testAddLog().
     */
    public function testAddLog()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getLogs
     * @todo   Implement testGetLogs().
     */
    public function testGetLogs()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getPrograms
     * @todo   Implement testGetPrograms().
     */
    public function testGetPrograms()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::setPreferences
     * @todo   Implement testSetPreferences().
     */
    public function testSetPreferences()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getPreferences
     * @todo   Implement testGetPreferences().
     */
    public function testGetPreferences()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::isAllowed
     * @todo   Implement testIsAllowed().
     */
    public function testIsAllowed()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\User::getMaximumDisplayForApplication
     * @todo   Implement testGetMaximumDisplayForApplication().
     */
    public function testGetMaximumDisplayForApplication()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

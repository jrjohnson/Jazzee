<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Duplicate;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class DuplicateTest extends TestCase
{

    /**
     * @var Duplicate
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Duplicate;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Duplicate::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Duplicate::setApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Duplicate::getApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Duplicate::setDuplicate
     * @todo   Implement testSetDuplicate().
     */
    public function testSetDuplicate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Duplicate::getDuplicate
     * @todo   Implement testGetDuplicate().
     */
    public function testGetDuplicate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Duplicate::ignore
     * @todo   Implement testIgnore().
     */
    public function testIgnore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Duplicate::unIgnore
     * @todo   Implement testUnIgnore().
     */
    public function testUnIgnore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Duplicate::isIgnored
     * @todo   Implement testIsIgnored().
     */
    public function testIsIgnored()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\File;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class FileTest extends TestCase
{

    /**
     * @var File
     */
    protected $object;

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers \Jazzee\CommonBundle\Entity\File::getId
    */
    public function testGetId()
    {
        $object = new File('test');
        $expected = rand(1, 100);
        $this->setPropertyOnObject($object, 'id', $expected);
        $this->assertSame($expected, $object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::getHash
     * @todo   Implement testGetHash().
     */
    public function testGetHash()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::getBlob
     * @todo   Implement testGetBlob().
     */
    public function testGetBlob()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::getLastModification
     * @todo   Implement testGetLastModification().
     */
    public function testGetLastModification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::getLastAccess
     * @todo   Implement testGetLastAccess().
     */
    public function testGetLastAccess()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::addReference
     * @todo   Implement testAddReference().
     */
    public function testAddReference()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\File::removeReference
     * @todo   Implement testRemoveReference().
     */
    public function testRemoveReference()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Attachment;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class AttachmentTest extends TestCase
{

    /**
     * @var Attachment
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Attachment;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Attachment::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::setApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Attachment::getApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Attachment::setAnswer
     * @todo   Implement testSetAnswer().
     */
    public function testSetAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::getAnswer
     * @todo   Implement testGetAnswer().
     */
    public function testGetAnswer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::setAttachment
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
     * @covers Jazzee\CommonBundle\Entity\Attachment::getAttachment
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
     * @covers Jazzee\CommonBundle\Entity\Attachment::setThumbnail
     * @todo   Implement testSetThumbnail().
     */
    public function testSetThumbnail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::getThumbnail
     * @todo   Implement testGetThumbnail().
     */
    public function testGetThumbnail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::getAttachmentHash
     * @todo   Implement testGetAttachmentHash().
     */
    public function testGetAttachmentHash()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::getThumbnailHash
     * @todo   Implement testGetThumbnailHash().
     */
    public function testGetThumbnailHash()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Attachment::preRemove
     * @todo   Implement testPreRemove().
     */
    public function testPreRemove()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

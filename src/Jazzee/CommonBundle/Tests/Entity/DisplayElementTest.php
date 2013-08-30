<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\DisplayElement;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class DisplayElementTest extends TestCase
{

    /**
     * @var DisplayElement
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
    * @covers JazzeeCommonBundleEntity\DisplayElement::getId
    */
    public function testGetId()
    {
        $object = new DisplayElement('element');
        $expected = rand(1, 100);
        $this->setPropertyOnObject($object, 'id', $expected);
        $this->assertSame($expected, $object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setWeight
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getWeight
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setTitle
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getTitle
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setName
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getName
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getType
     * @todo   Implement testGetType().
     */
    public function testGetType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getElement
     * @todo   Implement testGetElement().
     */
    public function testGetElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setElement
     * @todo   Implement testSetElement().
     */
    public function testSetElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getPage
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setPage
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
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::getDisplay
     * @todo   Implement testGetDisplay().
     */
    public function testGetDisplay()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::setDisplay
     * @todo   Implement testSetDisplay().
     */
    public function testSetDisplay()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\DisplayElement::createFromDisplayElement
     * @todo   Implement testCreateFromDisplayElement().
     */
    public function testCreateFromDisplayElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

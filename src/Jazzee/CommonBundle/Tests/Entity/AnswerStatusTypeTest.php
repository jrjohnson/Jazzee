<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\AnswerStatusType;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class AnswerStatusTypeTest extends TestCase
{

    /**
     * @var AnswerStatusType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new AnswerStatusType;
    }

    /**
     * @covers \Jazzee\CommonBundle\Entity\AnswerStatusType::getId
     */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\AnswerStatusType::setName
     * @covers Jazzee\CommonBundle\Entity\AnswerStatusType::getName
     */
    public function testSetName()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $expected = $faker->text;
            $this->object->setName($expected);
            $this->assertSame($expected, $this->object->getName());
        }
    }
}

<?php

namespace Jazzee\CommonBundle\Test\Security;

use Jazzee\CommonBundle\Security\PhpassEncoder;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class PhpassEncoderTest extends TestCase
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
        $this->object = new PhpassEncoder;
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\PhpassEncoder::encodePassword
     * @covers \Jazzee\CommonBundle\Security\PhpassEncoder::isPasswordValid
     */
    public function testEncode()
    {
        $generator = \Faker\Factory::create();
        for($i = 0; $i<100; $i++) {
            $raw = $generator->word;
            $encoded = $this->object->encodePassword($raw, $generator->word);
            $this->assertTrue($this->object->isPasswordValid($encoded, $raw, $generator->word));
        }
    }
}

<?php

namespace Jazzee\CommonBundle\Entity\Test;

use Jazzee\CommonBundle\Entity\Decision;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class DecisionTest extends TestCase
{

    /**
     * @var Decision
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Decision;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
    * @covers JazzeeCommonBundleEntity\Decision::getId
    */
    public function testGetId()
    {
        $expected = rand(1, 100);
        $this->setPropertyOnObject($this->object, 'id', $expected);
        $this->assertSame($expected, $this->object->getId());
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::setApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Decision::getApplicant
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
     * @covers Jazzee\CommonBundle\Entity\Decision::nominateAdmit
     * @todo   Implement testNominateAdmit().
     */
    public function testNominateAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoNominateAdmit
     * @todo   Implement testUndoNominateAdmit().
     */
    public function testUndoNominateAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::nominateDeny
     * @todo   Implement testNominateDeny().
     */
    public function testNominateDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoNominateDeny
     * @todo   Implement testUndoNominateDeny().
     */
    public function testUndoNominateDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::finalDeny
     * @todo   Implement testFinalDeny().
     */
    public function testFinalDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoFinalDeny
     * @todo   Implement testUndoFinalDeny().
     */
    public function testUndoFinalDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::setOfferResponseDeadline
     * @todo   Implement testSetOfferResponseDeadline().
     */
    public function testSetOfferResponseDeadline()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getOfferResponseDeadline
     * @todo   Implement testGetOfferResponseDeadline().
     */
    public function testGetOfferResponseDeadline()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::finalAdmit
     * @todo   Implement testFinalAdmit().
     */
    public function testFinalAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoFinalAdmit
     * @todo   Implement testUndoFinalAdmit().
     */
    public function testUndoFinalAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::acceptOffer
     * @todo   Implement testAcceptOffer().
     */
    public function testAcceptOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoAcceptOffer
     * @todo   Implement testUndoAcceptOffer().
     */
    public function testUndoAcceptOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::declineOffer
     * @todo   Implement testDeclineOffer().
     */
    public function testDeclineOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::undoDeclineOffer
     * @todo   Implement testUndoDeclineOffer().
     */
    public function testUndoDeclineOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::decisionViewed
     * @todo   Implement testDecisionViewed().
     */
    public function testDecisionViewed()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getFinalDeny
     * @todo   Implement testGetFinalDeny().
     */
    public function testGetFinalDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getFinalAdmit
     * @todo   Implement testGetFinalAdmit().
     */
    public function testGetFinalAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getNominateDeny
     * @todo   Implement testGetNominateDeny().
     */
    public function testGetNominateDeny()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getNominateAdmit
     * @todo   Implement testGetNominateAdmit().
     */
    public function testGetNominateAdmit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getAcceptOffer
     * @todo   Implement testGetAcceptOffer().
     */
    public function testGetAcceptOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getDeclineOffer
     * @todo   Implement testGetDeclineOffer().
     */
    public function testGetDeclineOffer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::getDecisionViewed
     * @todo   Implement testGetDecisionViewed().
     */
    public function testGetDecisionViewed()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::summary
     * @todo   Implement testSummary().
     */
    public function testSummary()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::status
     * @todo   Implement testStatus().
     */
    public function testStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Jazzee\CommonBundle\Entity\Decision::can
     * @todo   Implement testCan().
     */
    public function testCan()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}

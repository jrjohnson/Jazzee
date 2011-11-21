<?php 
/**
 * apply_page view
 * @author Jon Johnson <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license.txt
 * @package jazzee
 * @subpackage apply
 */
?>
  <?php if($page->getJazzeePage()->getStatus() == \Jazzee\Page::SKIPPED){?>
    <p class="skip">You have selected to skip this page.  You can still change your mind and <a href='<?php print $this->controller->getActionPath() . '/do/unskip';?>' title='complete this page'>Complete This Page</a> if you wish.</p>
  <?php } else {
    if(!$page->isRequired() and !count($page->getJazzeePage()->getAnswers())){?>
      <p class="skip">This page is optional, if you do not have any information to enter you can <a href='<?php print $this->controller->getActionPath() . '/do/skip';?>' title='skip this page'>Skip This Page</a>.</p>
    <?php }?>
    <div id='counter'><?php 
      if($page->getJazzeePage()->getAnswers()){
        $elementName = \Foundation\VC\Config::findElementCacading($page->getPage()->getType()->getClass(), '', '-counter');
        $this->renderElement($elementName, array('page'=>$page));
      }?>
  </div>
  <?php 
  $completedPayment = false;
  if($answers = $page->getJazzeePage()->getAnswers()){
    print "<div id='answers'>";
    $elementName = \Foundation\VC\Config::findElementCacading($page->getPage()->getType()->getClass(), '', '-answer');
    foreach($answers as $answer){
      if($answer->getPayment()->getStatus() == \Jazzee\Entity\Payment::PENDING or $answer->getPayment()->getStatus() == \Jazzee\Entity\Payment::SETTLED) $completedPayment = true;
      $this->renderElement($elementName, array('answer'=>$answer, 'page'=>$page,'currentAnswerID'=>$currentAnswerID));
    }
    print '</div>';
  }?>
  <?php
  
  if(!empty($currentAnswerID) or !$completedPayment or is_null($page->getMax())){
    $elementName = \Foundation\VC\Config::findElementCacading($page->getPage()->getType()->getClass(), '', '-form');
    $this->renderElement($elementName, array('page'=>$page));
  }
}
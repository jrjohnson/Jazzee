<?php
/**
 * View an applicant
 * @author Jon Johnson <jon.johnson@ucsf.edu>
 * @package jazzee
 * @subpackage applicants
 */
class ApplicantsSingleController extends \Jazzee\AdminController {
  const TITLE = 'Single Applicant';
  const PATH = 'applicants/single';
  
  const ACTION_INDEX = 'View';
  const ACTION_PDF = 'Print as PDF';
  const ACTION_UPDATEBIO = 'Edit Account';
  const ACTION_EXTENDDEADLINE = 'Extend Deadline';
  const ACTION_LOCK = 'Lock';
  const ACTION_UNLOCK = 'UnLock';
  const ACTION_ADDTAG = 'Tag';
  const ACTION_REMOVETAG = 'Remove Tag';
  const ACTION_ATTACHAPPLICANTPDF = 'Attach PDF';
  const ACTION_EDITANSWER = 'Edit Answer';
  const ACTION_DELETEANSWER = 'Delete Answer';
  const ACTION_ADDANSWER = 'Add Answer';
  const ACTION_ATTACHANSWERPDF = 'Attach PDF to Answer';
  const ACTION_VERIFYANSWER = 'Verify Answer';
  const ACTION_NOMINATEADMIT = 'Nominate for Admission';
  const ACTION_NOMINATEDENY = 'Nominate for Deny';
  const ACTION_UNDONOMINATEADMIT = 'Undo Admit Nomination';
  const ACTION_UNDONOMINATEDENY = 'Undo Deny Nomination';
  const ACTION_FINALADMIT = 'Final Admit';
  const ACTION_FINALDENY = 'Final Deny';
  const ACTION_NEWPAYMENT = 'Record Payment';
  const ACTION_SETTLEPAYMENT = 'Settle Payment';
  const ACTION_REFUNDPAYMENT = 'Refund Payment';
  const ACTION_REJECTPAYMENT = 'Reject Payment';
  
  
  /**
   * Add the required JS
   */
  protected function setUp(){
    parent::setUp();
    $this->layout = 'json';
    $this->setLayoutVar('status', 'error');  //default to an error
    $this->addScript($this->path('resource/foundation/scripts/form.js'));
    $this->addScript($this->path('resource/scripts/classes/Status.class.js'));
    $this->addScript($this->path('resource/scripts/classes/AuthenticationTimeout.class.js'));
    $this->addScript($this->path('resource/scripts/classes/Applicant.class.js'));
    $this->addScript($this->path('resource/scripts/controllers/applicants_single.controller.js'));
    \Foundation\VC\Config::addElementViewPath(__DIR__ . '/../../views/applicants/applicants_single/elements/');
  }
  
  /**
   * Javascript does the display work
   * @param integer $id the applicants id
   */
  public function actionIndex($id){
    $applicant = $this->getApplicantById($id);
    $this->layout = 'wide';
  }
  
  /**
   * Refresh evverything
   * @param integer $applicantId
   */
  public function actionRefresh($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $result = array(
     'bio' => $this->getBio($applicant),
     'actions' => $this->getActions($applicant),
     'decisions' => $this->getDecisions($applicant),
     'tags' => $this->getTags($applicant),
     'pages' => $this->getPages($applicant)
    );
    $this->layout = 'json'; //set the layout back since getPages changes it
    $this->setVar('result', $result);
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Get bio
   * @param \Jazzee\Entity\Applicant $applicant
   * @return array
   */
  protected function getBio(\Jazzee\Entity\Applicant $applicant){
    $bio = array(
     'name' => $applicant->getFullName(),
     'allowEdit' => $this->checkIsAllowed($this->controllerName, 'updateBio')
    );
    return $bio;
  }
  
  
  /**
   * Get an applicants action status
   * @param \Jazzee\Entity\Applicant $applicant
   */
  protected function getActions(\Jazzee\Entity\Applicant $applicant){
    $actions = array(
      'createdAt'=>$applicant->getCreatedAt(),
      'updatedAt'=>$applicant->getUpdatedAt(),
      'lastLogin'=>$applicant->getLastLogin()
    );
    return $actions;
  }
  
  /**
   * Get an applicants tags
   * @param \Jazzee\Entity\Applicant $applicant
   */
  protected function getTags(\Jazzee\Entity\Applicant $applicant){
    $tags = array(
      'tags'=>array(),
      'allowAdd' => $this->checkIsAllowed($this->controllerName, 'addTag'),
      'allowRemove' => $this->checkIsAllowed($this->controllerName, 'removeTag')
    );
    foreach($applicant->getTags() as $tag){
      $tags['tags'][] = array(
        'id'=> $tag->getId(),
        'title'=>$tag->getTitle()
      );
    }
    return $tags;
  }
  
  
  /**
   * Get application pages
   * @param \Jazzee\Entity\Applicant $applicant
   */
  protected function getPages(\Jazzee\Entity\Applicant $applicant){
    $pages = array(
      'pages'=>array(),
      'allowAddAnswer' => $this->checkIsAllowed($this->controllerName, 'addAnswer'),
      'allowEditAnswer' => $this->checkIsAllowed($this->controllerName, 'editAnswer'),
      'allowDeleteAnswer' => $this->checkIsAllowed($this->controllerName, 'deleteAnswer')
    );
    foreach($applicant->getApplication()->getPages() as $applicationPage){
      if($applicationPage->getJazzeePage()->showReviewPage()){
        $params = array($applicant->getId(), $applicationPage->getPage()->getId());
        $content = $this->getActionOutput('refreshPage', $params);
        $content = str_replace(array("\n", "\r"), '', $content);
        $pages['pages'][] = array(
          'id' => $applicationPage->getPage()->getId(),
          'content' => $content
        );
      }
    }
    
    return $pages;
  }
  
  
  /**
   * Get an applicants decisions status
   * @param \Jazzee\Entity\Applicant $applicant
   */
  protected function getDecisions(\Jazzee\Entity\Applicant $applicant){
    $status = '';
    if($applicant->getDecision()) $status = $applicant->getDecision()->status();
    switch($status){
      case '': $status = 'No Decision'; break;
      case 'nominateAdmit': $status = 'Nominated for Admission'; break; 
      case 'nominateDeny': $status = 'Nominated for Deny'; break; 
      case 'finalDeny': $status = 'Denied'; break; 
      case 'finalAdmit': $status = 'Admited'; break; 
      case 'acceptOffer': $status = 'Accepted'; break; 
      case 'declineOffer': $status = 'Declined'; break;
    }
    if($applicant->isLocked()){
      $decisions = array('status'=>$status);
      foreach(array('nominateAdmit', 'undoNominateAdmit', 'nominateDeny', 'undoNominateDeny', 'finalAdmit', 'finalDeny') as $type){
        $decisions["allow{$type}"] = ($this->checkIsAllowed($this->controllerName, $type) && $applicant->getDecision()->can($type));
      }
    }
    $decisions['allowUnlock'] = $this->checkIsAllowed($this->controllerName, 'unlock');
    $decisions['allowLock'] = $this->checkIsAllowed($this->controllerName, 'lock');
    $decisions['isLocked'] = $applicant->isLocked();
    return $decisions;
  }
  
  /**
   * Update Biography
   * @param integer $applicantId
   */
  public function actionUpdateBio($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $form = new \Foundation\Form();
    $form->setAction($this->path("applicants/single/{$applicantId}/updateBio"));
    $field = $form->newField();
    $field->setLegend('Edit ' . $applicant->getFirstName() . ' ' . $applicant->getLastName());
    
    $element = $field->newElement('TextInput', 'firstName');
    $element->setLabel('First Name');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));
    $element->setValue($applicant->getFirstName());
    
    $element = $field->newElement('TextInput', 'middleName');
    $element->setLabel('Middle Name');
    $element->setValue($applicant->getMiddleName());
    
    $element = $field->newElement('TextInput', 'lastName');
    $element->setLabel('Last Name');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));
    $element->setValue($applicant->getLastName());
    
    $element = $field->newElement('TextInput', 'suffix');
    $element->setLabel('Suffix');
    $element->setValue($applicant->getSuffix());
    
    $element = $field->newElement('TextInput', 'email');
    $element->setLabel('Email');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));
    $element->addValidator(new \Foundation\Form\Validator\EmailAddress($element));
    $element->addFilter(new \Foundation\Form\Filter\Lowercase($element));
    $element->setValue($applicant->getEmail());
    
    $form->newButton('submit', 'Save Changes');
    if(!empty($this->post)){
      $this->setLayoutVar('textarea', true);
      if($input = $form->processInput($this->post)){
        $applicant->setFirstName($input->get('firstName'));
        $applicant->setMiddleName($input->get('middleName'));
        $applicant->setLastName($input->get('lastName'));
        $applicant->setSuffix($input->get('suffix'));
        $applicant->setEmail($input->get('email'));
        
        $this->_em->persist($applicant);
        $this->setLayoutVar('status', 'success');
        $this->setVar('result', array('bio'=> $this->getBio($applicant)));
      }
    }
    $this->setVar('form', $form);
    $this->loadView('applicants_single/form');
  }
  
  /**
   * Get content for a page
   * @param integer $applicantId
   * @param integer $pageId
   */
  public function actionRefreshPage($applicantId, $pageId){
    $this->layout = 'blank';
    $applicant = $this->getApplicantById($applicantId);
    $page = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findOneBy(array('page'=>$pageId, 'application'=>$this->_application->getId()));
    $this->setVar('variables', array('page'=>$page,'applicant'=>$applicant));
    $elementName = \Foundation\VC\Config::findElementCacading($page->getPage()->getType()->getClass(), '', '-applicants-single-page');
    $this->setVar('element', $elementName);
    $this->loadView($this->controllerName . '/element');
  }
  
  /**
   * Nominate and applicant for admission
   * @param integer $applicantId
   */
  public function actionNominateAdmit($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    if(!$applicant->isLocked()) throw new \Jazzee\Exception('Tried to nominate an applicant that was not locked');
    $applicant->getDecision()->nominateAdmit();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Undo Nominate an applicant for admission
   * @param integer $applicantId
   */
  public function actionUndoNominateAdmit($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->getDecision()->undoNominateAdmit();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Final Admit applicant
   * @param integer $applicantId
   */
  public function actionFinalAdmit($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->getDecision()->finalAdmit();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Tag an applicant
   * @param integer $applicantID
   */
  public function actionAddTag($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $tag = $this->_em->getRepository('\Jazzee\Entity\Tag')->findOneBy(array('title'=> $this->post['tagTitle']));
    if(!$tag){
      $tag = new \Jazzee\Entity\Tag();
      $tag->setTitle($this->post['tagTitle']);
      $this->_em->persist($tag);
    }
    $applicant->addTag($tag);
    $this->_em->persist($applicant);
    $this->_em->flush(); //flush here so the tag ID will be available
    $this->setVar('result', array('tags'=>$this->getTags($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Remove a tag from an applicant
   * @param integer $applicantID
   */
  public function actionRemoveTag($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $tag = $this->_em->getRepository('\Jazzee\Entity\Tag')->find($this->post['tagId']);
    $applicant->removeTag($tag);
    $this->_em->persist($applicant);
    $this->setVar('result', array('tags'=>$this->getTags($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Nominate and applicant for deny
   * @param integer $applicantId
   */
  public function actionNominateDeny($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    if(!$applicant->isLocked()) throw new \Jazzee\Exception('Tried to nominate an applicant that was not locked');
    $applicant->getDecision()->nominateDeny();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Undo Nominate an applicant for deny
   * @param integer $applicantId
   */
  public function actionUndoNominateDeny($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->getDecision()->undoNominateDeny();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Final Deny applicant
   * @param integer $applicantId
   */
  public function actionFinalDeny($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->getDecision()->finalDeny();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Unlock an application
   * @param integer $applicantId
   */
  public function actionUnlock($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->unlock();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Lock an application
   * @param integer $applicantId
   */
  public function actionLock($applicantId){
    $applicant = $this->getApplicantById($applicantId);
    $applicant->lock();
    $this->_em->persist($applicant);
    $this->setVar('result', array('decisions'=>$this->getDecisions($applicant)));
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Add an answer
   * @param integer $applicantId
   * @param integer $pageId
   */
  public function actionAddAnswer($applicantId, $pageId){
    $applicant = $this->getApplicantById($applicantId);
    $pageEntity = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findOneBy(array('page'=>$pageId, 'application'=>$this->_application->getId()));
    $pageEntity->getJazzeePage()->setApplicant($applicant);
    $pageEntity->getJazzeePage()->setController($this);
    if(!empty($this->post)){
      $this->setLayoutVar('textarea', true);
      if($input = $pageEntity->getJazzeePage()->validateInput($this->post)){
        $pageEntity->getJazzeePage()->newAnswer($input);
        $this->setLayoutVar('status', 'success');
      } else {
        $this->setLayoutVar('status', 'error');
      }
    }
    $form = $pageEntity->getJazzeePage()->getForm();
    $form->setAction($this->path("applicants/single/{$applicantId}/addAnswer/{$pageId}"));
    $this->setVar('form', $form);
    $this->loadView($this->controllerName . '/form');
  }
  
  /**
   * Edit an answer
   * @param integer $applicantId
   * @param integer $answerId
   */
  public function actionEditAnswer($applicantId, $answerId){
    $applicant = $this->getApplicantById($applicantId);
    if(!$answer = $applicant->findAnswerById($answerId))  throw new \Jazzee\Exception("Answer {$answerId} does not belong to applicant {$applicantId}");
    $pageEntity = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findOneBy(array('page'=>$answer->getPage()->getId(), 'application'=>$this->_application->getId()));
    $pageEntity->getJazzeePage()->setApplicant($applicant);
    $pageEntity->getJazzeePage()->setController($this);
    $pageEntity->getJazzeePage()->fill($answerId);
    if(!empty($this->post)){
      $this->setLayoutVar('textarea', true);
      if($input = $pageEntity->getJazzeePage()->validateInput($this->post)){
        $pageEntity->getJazzeePage()->updateAnswer($input, $answerId);
        $this->setLayoutVar('status', 'success');
      } else {
        $this->setLayoutVar('status', 'error');
      }
    }
    $form = $pageEntity->getJazzeePage()->getForm();
    $form->setAction($this->path("applicants/single/{$applicantId}/editAnswer/{$answerId}"));
    $this->setVar('form', $form);
    $this->loadView($this->controllerName . '/form');
  }
  
  /**
   * Delete an answer
   * @param integer $applicantId
   * @param integer $answerId
   */
  public function actionDeleteAnswer($applicantId, $answerId){
    $applicant = $this->getApplicantById($applicantId);
    if(!$answer = $applicant->findAnswerById($answerId))  throw new \Jazzee\Exception("Answer {$answerId} does not belong to applicant {$applicantId}");
    $pageEntity = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findOneBy(array('page'=>$answer->getPage()->getId(), 'application'=>$this->_application->getId()));
    $pageEntity->getJazzeePage()->setApplicant($applicant);
    $pageEntity->getJazzeePage()->setController($this);
    $pageEntity->getJazzeePage()->fill($answerId);
    $pageEntity->getJazzeePage()->deleteAnswer($answerId);
    $this->setVar('result', true);
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Do something with an answer
   * Passes everything off to the page to perform a special action
   * @param integer $applicantId
   * @param string $what the special method name
   * @param integer $answerId
   */
  public function actionDo($applicantId, $what, $answerId){
    $applicant = $this->getApplicantById($applicantId);
    if(!$answer = $applicant->findAnswerById($answerId))  throw new \Jazzee\Exception("Answer {$answerId} does not belong to applicant {$applicantId}");
    $pageEntity = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findOneBy(array('page'=>$answer->getPage()->getId(), 'application'=>$this->_application->getId()));
    $pageEntity->getJazzeePage()->setApplicant($applicant);
    $pageEntity->getJazzeePage()->setController($this);
    if(method_exists($pageEntity->getJazzeePage(), $what)){
      $form = $pageEntity->getJazzeePage()->$what($answerId, $this->post, true);
      $form->setAction($this->path("applicants/single/{$applicantId}/do/{$what}/{$answerId}"));
      $this->setVar('form', $form);
      if(!empty($this->post)) $this->setLayoutVar('textarea', true);
    }
    $this->loadView($this->controllerName . '/form');
  }
  
  public function getActionPath(){
    return null;
  }
  
  public static function isAllowed($controller, $action, \Jazzee\Entity\User $user = null, \Jazzee\Entity\Program $program = null, \Jazzee\Entity\Application $application = null){
    //several views are controller by the complete action
    if(in_array($action, array('refresh', 'refreshPage'))) $action = 'index';
    if(in_array($action, array('do'))) $action = 'editAnswer';
    return parent::isAllowed($controller, $action, $user, $program);
  }
}
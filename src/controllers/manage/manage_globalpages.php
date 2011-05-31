<?php
/**
 * Manage Global Pages
 * @author Jon Johnson <jon.johnson@ucsf.edu>
 * @package jazzee
 * @subpackage manage
 */
class ManageGlobalpagesController extends \Jazzee\PageBuilder {
  const MENU = 'Manage';
  const TITLE = 'Global Pages';
  const PATH = 'manage/globalpages';
  
  const ACTION_INDEX = 'Edit Global Pages';
  
  /**
   * Add the required JS
   */
  public function setUp(){
    parent::setUp();
    $this->addScript($this->path('resource/scripts/controllers/manage_globalpages.controller.js'));
  }
  
  /**
   * List the application Pages
   */
  public function actionListPages(){
    $pages = array();
    foreach($this->_em->getRepository('\Jazzee\Entity\Page')->findByIsGlobal(true) AS $page){
      $pages[] = $this->pageArray($page);
    }
    $this->setVar('result', $pages);
    $this->loadView($this->controllerName . '/result');
  }
  
  /**
   * Save data from editing a page
   * @param integer $pageId
   */
  public function actionSavePage($pageId){
    $data = json_decode($this->post['data']);
    switch($data->status){
      case 'delete':
        if($page = $this->_em->getRepository('\Jazzee\Entity\Page')->findOneBy(array('id'=>$pageId, 'isGlobal'=>true))){
          $applicationPages = $this->_em->getRepository('\Jazzee\Entity\ApplicationPage')->findBy(array('page' => $page->getId()));
          if($applicationPages){
            $this->setLayoutVar('status', 'error');
            $this->addMessage('error',$page->getTitle() . ' could not be deleted becuase it is part of at least one application');
          } else {
            $this->_em->remove($page);
          }
        } else {
          $this->setLayoutVar('status', 'error');
          $this->addMessage('error',"Unable to find a page with id {$pageId}");
        }
      break;
      case 'new':
        $page = new \Jazzee\Entity\Page();
        $page->makeGlobal();
        $page->setType($this->_em->getRepository('\Jazzee\Entity\PageType')->find($data->classId));
        //create a fake application page to work with so we can run setupNewPage
        $ap = new \Jazzee\Entity\ApplicationPage();
        $ap->setPage($page);
        $ap->getJazzeePage()->setupNewPage();
        unset($ap);
      default:
        if(!isset($page)) $page = $this->_em->getRepository('\Jazzee\Entity\Page')->findOneBy(array('id'=>$pageId, 'isGlobal'=>true));
        $this->savePage($page, $data);
    }
  }
  
  public function actionPreviewPage(){
    $data = json_decode($this->post['data']);
    $page = new \Jazzee\Entity\Page();
    $this->genericPage($page, $data);
    $this->layout = 'blank';
    $ap = new \Jazzee\Entity\ApplicationPage();
    $ap->setPage($page);
    $ap->getJazzeePage()->setController($this);
    $this->setVar('page', $ap);
  }
}
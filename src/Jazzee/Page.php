<?php
namespace Jazzee;
/**
 * Page interface
 * Allows us to impelement a strategy pattern to load page types with thier Entities
 */
interface Page 
{
  /**
   * Page status constants
   */
  const INCOMPLETE = 0;
  const COMPLETE = 1;
  const SKIPPED = 2;
  
  /**
   * Set the controller
   * 
   * @param \Jazzee\Controller $controller
   */
  function setController(\Jazzee\Controller $controller);
  
  /**
   * Set the Applicant
   * 
   * @param \Jazzee\Entity\Applicant $applicant
   */
  function setApplicant(\Jazzee\Entity\Applicant $applicant);
  
  /**
   * Get the form for the page
   */
  public function getForm();
  
  /**
   * Show Review page
   * 
   * Does this page contain any answers or is it a Text or Lock page which doesn't
   * show anything usefull to reviewers
   * @return bool
   */
  public function showReviewPage();
  
  /**
   * Attachemnts control
   * 
   * Does this page allow answer attachments
   * @return bool
   */
  public function allowAttachments();
  
  /**
   * Validate user input
   * 
   * @param array $postData straight post data from the form
   * @return \Foundation\Form\Input on success false on failure
   */
  function validateInput($input);

  /**
   * Create a new answer from input
   * @param \Foundation\Form\Input $input
   * @return bool
   */
  function newAnswer($input);
  
  /**
   * Update an answer from input
   * @param \Foundation\Form\Input $input
   * @param integer $answerID
   * @return bool
   */
  function updateAnswer($input, $answerID);
  
  /**
   * Delete an answer
   * @param integer $answerID
   * @return bool
   */
  function deleteAnswer($answerID);
  
  /**
   * Fill the form with data from an answer
   * @param integer $answerID
   */
  function fill($answerID);
  
  /**
   * Get the current answers
   * @return array \Jazzee\Answer
   */
  function getAnswers();

  /**
   * Get the current status
   * @return integer self::INCOMPLETE | self::COMPLETE | self:SKIPPED
   */
  function getStatus();
  
  /**
   * Setup a new page
   * 
   * Eg - create a form with fixed ids
   */
  function setupNewPage();
}
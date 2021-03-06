<?php
namespace Jazzee\Interfaces;

/**
 * DataPage interface
 * Any page which collects applicant data and should be able to display it
 * 
 * This interface is implemented by all of the data specific interfaces PDF,XML, Csv ets
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
interface DataPage
{
  
  /**
   * Format a page array with answers into a usable strucutre with customizations
   * for each page type
   * 
   * @param array $answers
   * 
   * @return array
   */
  public function formatApplicantArray(array $answers);
  
  /**
   * List the elements available for creating a display
   * 
   * @return array \Jazzee\Interfaces\DisplayElement
   */
  public function listDisplayElements();
  
  /**
   * Get the value for an answer array for a display element
   * 
   * @param array $answer
   * @param \Jazzee\Interfaces\DisplayElement $displayElement
   * @retrun string
   */
  public function getDisplayElementValueFromArray(array $answer, \Jazzee\Interfaces\DisplayElement $displayElement);
}
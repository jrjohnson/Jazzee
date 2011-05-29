<?php
namespace Jazzee\Entity\Element;
/**
 * Checkbox List Element
 * @author Jon Johnson <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license.txt
 * @package jazzee
 */
class CheckboxList extends AbstractElement {
  
  public function addToField(\Foundation\Form\Field $field){
    $element = $field->newElement('CheckboxList', 'el' . $this->_element->getId());
    $element->setLabel($this->_element->getTitle());
    $element->setInstructions($this->_element->getInstructions());
    $element->setFormat($this->_element->getFormat());
    $element->setDefaultValue($this->_element->getDefaultValue());
    if($this->_element->isRequired()){
      $validator = new \Foundation\Form\Validator\NotEmpty($element);
      $element->addValidator($validator);
    }
    foreach($this->_element->getListItems() as $item){
      if($item->isActive()) $element->newItem($item->getId(), $item->getValue());
    }
    return $element;
  }
  
  public function getElementAnswers($input){
    $elementAnswers = array();
    if(!empty($input)){
      foreach($input as $position => $value){
        $elementAnswer = new \Jazzee\Entity\ElementAnswer;
        $elementAnswer->setElement($this->_element);
        $elementAnswer->setPosition($position);
        $elementAnswer->setEInteger($value);
        $elementAnswers[] = $elementAnswer;
      }
    }
    return $elementAnswers;
  }
  
  public function displayValue(\Jazzee\Entity\Answer $answer){
    $arr = array();
    $elementsAnswers = $answer->getElementAnswersForElement($this->_element);
    foreach($elementsAnswers as $elementAnswer){
      $arr[] = $this->_element->getItemById($elementAnswer->getEInteger())->getValue();
    }
    return empty($arr)?null:implode(', ', $arr);
  }
  
  public function formValue(\Jazzee\Entity\Answer $answer){
    $arr = array();
    $elementsAnswers = $answer->getElementAnswersForElement($this->_element);
    foreach($elementsAnswers as $elementsAnswer){
      $arr[] = $this->_element->getItemById($elementsAnswer->getEInteger())->getId();
    }
    return $arr;
  }
}
?>
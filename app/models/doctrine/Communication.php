<?php
/**
 * BaseCommunication
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $parentID
 * @property integer $applicantID
 * @property integer $userID
 * @property enum $sentBy
 * @property string $text
 * @property timestamp $createdAt
 * @property integer $status
 * @property Communication $Parent
 * @property Applicant $Applicant
 * @property User $User
 * @property Communication $Reply
 * 
 * @package    jazzee
 * @subpackage orm
 */
class Communication extends Doctrine_Record{
  
  /**
   * @see BaseCommunication::setTableDefinition()
   */
  public function setTableDefinition(){
    $this->setTableName('communication');
    $this->hasColumn('parentID', 'integer', null, array(
      'type' => 'integer',
     ));
    $this->hasColumn('applicantID', 'integer', null, array(
      'type' => 'integer',
     ));
    $this->hasColumn('userID', 'integer', null, array(
      'type' => 'integer',
     ));
    $this->hasColumn('sentBy', 'enum', null, array(
      'type' => 'enum',
      'values' => array(
        0 => 'applicant',
        1 => 'user',
      ),
     ));
    $this->hasColumn('text', 'string', 4000, array(
      'type' => 'string',
      'length' => '4000',
     ));
    $this->hasColumn('createdAt', 'timestamp', null, array(
      'type' => 'timestamp',
     ));
    $this->hasColumn('status', 'integer', null, array(
      'type' => 'integer',
     ));
  }

  /**
   * @see BaseCommunication::setUp()
   */
  public function setUp(){
    parent::setUp();
    $this->hasOne('Communication as Parent', array(
      'local' => 'parentID',
      'foreign' => 'id',
      'onDelete' => 'CASCADE',
      'onUpdate' => 'CASCADE')
    );

    $this->hasOne('Applicant', array(
      'local' => 'applicantID',
      'foreign' => 'id',
      'onDelete' => 'CASCADE',
      'onUpdate' => 'CASCADE')
    );

    $this->hasOne('User', array(
      'local' => 'userID',
      'foreign' => 'id')
    );

    $this->hasOne('Communication as Reply', array(
      'local' => 'id',
      'foreign' => 'parentID')
    );
  }
  
  /**
   * Pre Insert set the createdAt timestamp
   * @see Doctrine_Record::preInsert()
   */
  public function preInsert($event){
    $modifiedFields = $this->getModified();
    if(!array_key_exists('createdAt',$modifiedFields)){
      $this->createdAt = date('Y-m-d H:i:s', time());
    }
  }
}
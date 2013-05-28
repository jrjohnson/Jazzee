<?php

/**
 * Create applicants
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class ApplicantsCreateController extends \Jazzee\AdminController
{

  const MENU = 'Applicants';
  const TITLE = 'Create';
  const PATH = 'applicants/create';
  const ACTION_INDEX = 'Create applicants';

  /**
   * Add the required JS
   */
  protected function setUp()
  {
    parent::setUp();
    $this->addScript($this->path('resource/scripts/controllers/applicants_create.controller.js'));
  }

  /**
   * Create a new spplicant
   */
  public function actionIndex()
  {
    $form = new \Foundation\Form();
    $form->setCSRFToken($this->getCSRFToken());
    $form->setAction($this->path('applicants/create'));
    $field = $form->newField();
    $field->setLegend('Create Applicant');
    
    $element = $field->newElement('TextInput', 'first');
    $element->setLabel('First Name');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));

    $element = $field->newElement('TextInput', 'middle');
    $element->setLabel('Middle Name');

    $element = $field->newElement('TextInput', 'last');
    $element->setLabel('Last Name');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));

    $element = $field->newElement('TextInput', 'suffix');
    $element->setLabel('Suffix');
    $element->setFormat('Example: Jr., III');

    $element = $field->newElement('TextInput', 'email');
    $element->setLabel('Email Address');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));
    $element->addValidator(new \Foundation\Form\Validator\EmailAddress($element));
    $element->addFilter(new \Foundation\Form\Filter\Lowercase($element));

    $element = $field->newElement('TextInput', 'notificationSubject');
    $element->setLabel('Subject for Notification Email');
    $element->setValue('New Application Account');

    $element = $field->newElement('Textarea', 'notificationMessage');
    $element->setLabel('Notification Email Message');
    $element->setFormat('Leave this blank if you do not want to notify the applicant of their new account');
    
    $notificationMessagereplacements = array(
      '_Applicant_Name_',
      '_Deadline_',
      '_Link_',
      '_Email_',
      '_Password_'
    );
    $element->setInstructions('You can use these tokens in the text, they will be replaced automatically: <br />' . implode('</br />', $notificationMessagereplacements));
    $element->setValue("_Applicant_Name_,\nAn account has been created for you in the {$this->_application->getProgram()->getName()} application.\nYou can login at: _Link_ \nEmail: _Email_\nPassword: _Password_ \nYou have until _Deadline_ to complete your application.");
    
    $element = $field->newElement('TextInput', 'password');
    $element->setLabel('Password');
    $element->setFormat('If you leave the password blank a random password will be generated.');

    $element = $field->newElement('DateInput', 'deadlineExtension');
    $element->setLabel('Deadline');
    $element->setFormat('If you wish to extend this applicants deadline past the application deadline enter it here.');
    if($this->_application->getClose()){
      $element->addValidator(new \Foundation\Form\Validator\DateAfter($element, $this->_application->getClose()->format('c')));
    }
    $element->addValidator(new \Foundation\Form\Validator\DateAfter($element, date('c')));
    $element = $field->newElement('TextInput', 'externalId');
    $element->setLabel('External ID');

    $form->newButton('submit', 'Create Applicant');
    if ($input = $form->processInput($this->post)) {
      $duplicate = $this->_em->getRepository('Jazzee\Entity\Applicant')->findOneByEmailAndApplication($input->get('email'), $this->_application);
      if ($duplicate) {
        $form->getElementByName('email')->addMessage('An applicant with that email address already exists.');
      } else {
        $applicant = new \Jazzee\Entity\Applicant;
        $applicant->setApplication($this->_application);
        $applicant->setEmail($input->get('email'));
        if($input->get('password')){
          $applicant->setPassword($input->get('password'));
          $plainTextPassword = $input->get('password');
        } else {
          $plainTextPassword = $applicant->generatePassword();
        }
        $applicant->setFirstName($input->get('first'));
        $applicant->setMiddleName($input->get('middle'));
        $applicant->setLastName($input->get('last'));
        $applicant->setSuffix($input->get('suffix'));
        $applicant->setExternalId($input->get('externalId'));
        if($input->get('deadlineExtension')){
          $applicant->setDeadlineExtension($input->get('deadlineExtension'));
        }
        $this->_em->persist($applicant);
        $this->_em->flush();
        $this->setVar('applicant', $applicant);
        $this->setVar('plainTextPassword', $plainTextPassword);
        $this->addMessage('success', 'Applicant Created Successfully');
        if($input->get('notificationMessage')){
          $replace = array(
            $applicant->getFullName(),
            $applicant->getDeadline()?$applicant->getDeadline()->format('l F jS Y g:ia'):'',
            $this->absoluteApplyPath("apply/{$this->_application->getProgram()->getShortName()}/{$this->_application->getCycle()->getName()}/applicant/login"),
            $applicant->getEmail(),
            $plainTextPassword
          );
          $body = str_ireplace($notificationMessagereplacements, $replace, $input->get('notificationMessage'));
          $subject = $input->get('notificationSubject')?$input->get('notificationSubject'):'New Application Account';
          $email = $this->newMailMessage();
          $email->AddCustomHeader('X-Jazzee-Applicant-ID:' . $applicant->getId());
          $email->AddAddress(
              $applicant->getFullName(),
              $applicant->getEmail()
          );
          
          $email->setFrom($this->_application->getContactEmail(), $this->_application->getContactName());
          $email->Subject = $subject;
          $email->Body = $body;
          $email->Send();
          
          $thread = new \Jazzee\Entity\Thread();
          $thread->setSubject($subject);
          $thread->setApplicant($applicant);

          $message = new \Jazzee\Entity\Message();
          $message->setSender(\Jazzee\Entity\Message::PROGRAM);
          $message->setText(nl2br($body));
          $message->read();
          $thread->addMessage($message);
          $this->_em->persist($thread);
          $this->_em->persist($message);
          
         $this->addMessage('success', 'New account email sent to ' . $applicant->getEmail());
        }
        
        
        
        $form->applyDefaultValues();
      }
    }
    $this->setVar('form', $form);
  }

  /**
   * Bulk create applicants from a csv file
   */
  public function actionBulk()
  {
    $form = new \Foundation\Form();
    $form->setCSRFToken($this->getCSRFToken());
    $form->setAction($this->path('applicants/create/bulk'));
    $field = $form->newField();
    $field->setLegend('Create Applicants From File');
    
    $element = $field->newElement('FileInput', 'file');
    $element->setLabel('File');
    $element->addValidator(new \Foundation\Form\Validator\NotEmpty($element));
    $element->addFilter(new \Foundation\Form\Filter\CSVArray($element));
    
    $element = $field->newElement('TextInput', 'notificationSubject');
    $element->setLabel('Subject for Notification Email');
    $element->setValue('New Application Account');

    $element = $field->newElement('Textarea', 'notificationMessage');
    $element->setLabel('Notification Email Message');
    $element->setFormat('Leave this blank if you do not want to notify the applicant of their new account');
    
    $notificationMessagereplacements = array(
      '_Applicant_Name_',
      '_Deadline_',
      '_Link_',
      '_Email_',
      '_Password_'
    );
    $element->setInstructions('You can use these tokens in the text, they will be replaced automatically: <br />' . implode('</br />', $notificationMessagereplacements));
    $element->setValue("_Applicant_Name_,\nAn account has been created for you in the {$this->_application->getProgram()->getName()} application.\nYou can login at: _Link_ \nEmail: _Email_\nPassword: _Password_ \nYou have until _Deadline_ to complete your application.");

    $element = $field->newElement('DateInput', 'deadlineExtension');
    $element->setLabel('Deadline');
    $element->setFormat('If you wish to extend this applicants deadline past the application deadline enter it here.');
    if($this->_application->getClose()){
      $element->addValidator(new \Foundation\Form\Validator\DateAfter($element, $this->_application->getClose()->format('c')));
    }

    $form->newButton('submit', 'Upload File and create applicants');
    if ($input = $form->processInput($this->post)) {
      $newApplicants = $input->get('file');
      $first = $newApplicants[0];
      
      if(in_array('First Name',$first) OR in_array('Last Name',$first) OR in_array('Email Address',$first)){
        $headers = array_shift($newApplicants);
      } else {
        $headers = array(
          'First Name',
          'Last Name',
          'Middle Name',
          'Suffix',
          'Email Address',
          'Password',
          'External ID'
        );
      }
      $byKey = array();
      foreach($newApplicants as $newApplicant){
        $arr = array();
        foreach($headers as $key => $value){
          $arr[$value] = $newApplicant[$key];
        }
        $byKey[] = $arr;
      }
      $newApplicants = $byKey;
      $results = array();
      foreach($newApplicants as $newApplicant){
        $result = array(
          'messages' => array(),
          'applicant' => null,
          'plainTextPassword' => ''
        );
        $duplicate = $this->_em->getRepository('Jazzee\Entity\Applicant')->findOneByEmailAndApplication($newApplicant['Email Address'], $this->_application);
        if ($duplicate) {
          $result['status'] = 'duplicate';
          $result['messages'][] = 'An applicant with that email address already exists.';
          $result['applicant'] = $duplicate;
        } else {
          $result['status'] = 'success';
          $applicant = new \Jazzee\Entity\Applicant;
          $applicant->setApplication($this->_application);
          $applicant->setEmail($newApplicant['Email Address']);
          if($newApplicant['Password']){
            $applicant->setPassword($newApplicant['Password']);
            $plainTextPassword = $newApplicant['Password'];
          } else {
            $plainTextPassword = $applicant->generatePassword();
          }
          $applicant->setFirstName($newApplicant['First Name']);
          $applicant->setMiddleName($newApplicant['Middle Name']);
          $applicant->setLastName($newApplicant['Last Name']);
          $applicant->setSuffix($newApplicant['Suffix']);
          $applicant->setExternalId($newApplicant['External ID']);
          if($input->get('deadlineExtension')){
            $applicant->setDeadlineExtension($input->get('deadlineExtension'));
          }
          $this->_em->persist($applicant);
          
          $result['applicant'] = $applicant;
          $result['plainTextPassword'] = $plainTextPassword;
          $result['messages'][] = 'Applicant Created Successfully';
          if($input->get('notificationMessage')){
            $replace = array(
              $applicant->getFullName(),
              $applicant->getDeadline()?$applicant->getDeadline()->format('l F jS Y g:ia'):'',
              $this->absoluteApplyPath("apply/{$this->_application->getProgram()->getShortName()}/{$this->_application->getCycle()->getName()}/applicant/login"),
              $applicant->getEmail(),
              $plainTextPassword
            );
            $body = str_ireplace($notificationMessagereplacements, $replace, $input->get('notificationMessage'));
            $subject = $input->get('notificationSubject')?$input->get('notificationSubject'):'New Application Account';
            $email = $this->newMailMessage();
            $email->AddCustomHeader('X-Jazzee-Applicant-ID:' . $applicant->getId());
            $email->AddAddress(
                $applicant->getFullName(),
                $applicant->getEmail()
            );

            $email->setFrom($this->_application->getContactEmail(), $this->_application->getContactName());
            $email->Subject = $subject;
            $email->Body = $body;
            $email->Send();

            $thread = new \Jazzee\Entity\Thread();
            $thread->setSubject($subject);
            $thread->setApplicant($applicant);

            $message = new \Jazzee\Entity\Message();
            $message->setSender(\Jazzee\Entity\Message::PROGRAM);
            $message->setText(nl2br($body));
            $message->read();
            $thread->addMessage($message);
            $this->_em->persist($thread);
            $this->_em->persist($message);
            $result['messages'][] = 'New account email sent';
          }
        }
        $results[] = $result;
      }
      $this->setVar('results', $results);
      $form->applyDefaultValues();
      $this->_em->flush();
    }
    $this->setVar('form', $form);
  }

  /**
   * Download a sample file for upload
   */
  public function actionSampleFile()
  {
    $headers = array(
      'First Name',
      'Last Name',
      'Middle Name',
      'Suffix',
      'Email Address',
      'Password',
      'External ID'
    );
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=buik_upload_sample.csv");
    ob_end_clean();
    $handle = fopen('php://output', 'w');
    fputcsv($handle, $headers);
    fclose($handle);
    exit(0);
  }

  /**
   * Use the index action to controll acccess
   * require a published application
   * @param type $controller
   * @param string $action
   * @param \Jazzee\Entity\User $user
   * @param \Jazzee\Entity\Program $program
   * @param \Jazzee\Entity\Application $application
   * @return type
   */
  public static function isAllowed($controller, $action, \Jazzee\Entity\User $user = null, \Jazzee\Entity\Program $program = null, \Jazzee\Entity\Application $application = null)
  {
    if(!$application || !$application->isPublished()){
      return false;
    }
    //several views are controller by the index action
    if (in_array($action, array('bulk', 'sampleFile'))) {
      $action = 'index';
    }

    return parent::isAllowed($controller, $action, $user, $program, $application);
  }

}
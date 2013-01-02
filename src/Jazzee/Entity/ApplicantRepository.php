<?php
namespace Jazzee\Entity;

/**
 * ApplicantRepository
 * Special Repository methods for Applicants
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class ApplicantRepository extends \Doctrine\ORM\EntityRepository
{

  /**
   * find on by email address and application
   *
   * Search for an Applicant by email in an application
   * @param string $email
   * @param Application $application
   * @return Application
   */
  public function findOneByEmailAndApplication($email, Application $application)
  {
    $query = $this->_em->createQuery('SELECT a FROM Jazzee\Entity\Applicant a WHERE a.application = :applicationId AND  a.email = :email');
    $query->setParameter('applicationId', $application->getId());
    $query->setParameter('email', $email);
    $result = $query->getResult();
    if (count($result)) {
      return $result[0];
    }

    return false;
  }

  /**
   * find applicants in a cycle
   *
   * Search for an Applicant by cycle
   * @param Cycle $cycle
   * @return array
   */
  public function findByCycle(Cycle $cycle)
  {
    $query = $this->_em->createQuery('SELECT a FROM Jazzee\Entity\Applicant a WHERE a.application IN (SELECT app FROM Jazzee\Entity\Application app WHERE app.cycle = :cycleId) AND a.deactivated=false');
    $query->setParameter('cycleId', $cycle->getId());

    return $query->getResult();
  }

  /**
   * find duplicate applicants in the same cycle
   *
   * @param Applicant $applicant
   * @return array
   */
  public function findDuplicates(Applicant $applicant)
  {
    $query = $this->_em->createQuery('SELECT a FROM Jazzee\Entity\Applicant a WHERE a != :applicantId AND a.email = :email AND a.application IN (SELECT app FROM Jazzee\Entity\Application app WHERE app.cycle = :cycleId) AND a.deactivated=false');
    $query->setParameter('applicantId', $applicant->getId());
    $query->setParameter('cycleId', $applicant->getApplication()->getCycle()->getId());
    $query->setParameter('email', $applicant->getEmail());

    return $query->getResult();
  }

  /**
   * Find applicants by name
   *
   * @param string $firstName
   * @param string $lastName
   * @param Application $application
   * @return Application
   */
  public function findApplicantsByName($firstName, $lastName, Application $application = null)
  {
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->add('select', 'a')
            ->from('Jazzee\Entity\Applicant', 'a');

    if (!is_null($application)) {
      $queryBuilder->where('a.application = :applicationId');
      $queryBuilder->setParameter('applicationId', $application->getId());
    }
    $queryBuilder->andWhere('a.firstName LIKE :firstName')
            ->andWhere('a.lastName LIKE :lastName')
            ->orderBy('a.lastName, a.firstName');
    $queryBuilder->andWhere('a.deactivated=false');
    $queryBuilder->setParameter('firstName', $firstName);
    $queryBuilder->setParameter('lastName', $lastName);

    return $queryBuilder->getQuery()->getResult();
  }

  /**
   * All the applicants in an application
   * @param Application $application
   * @param boolean $deep should we load the full data for each applicant
   * @return array
   */
  public function findByApplication(Application $application, $deep = false)
  {
    if (!$deep) {
      $queryBuilder = $this->_em->createQueryBuilder();
      $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
      $queryBuilder->add('select', 'applicant');
    } else {
      $queryBuilder = $this->deepApplicantQuery();
    }

    $queryBuilder->andWhere('applicant.application = :applicationId');
    $queryBuilder->andWhere('applicant.deactivated=false');
    $queryBuilder->orderBy('applicant.lastName, applicant.firstName');
    $queryBuilder->setParameter('applicationId', $application->getId());

    return $queryBuilder->getQuery()->getResult();
  }

  /**
   * All the applicants in an application
   * @param Application $application
   * @param boolean $deep should we load the full data for each applicant
   * @return array
   */
  public function findIdsByApplication(Application $application)
  {
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
    $queryBuilder->add('select', 'applicant.id');
    

    $queryBuilder->andWhere('applicant.application = :applicationId');
    $queryBuilder->andWhere('applicant.deactivated=false');
    $queryBuilder->orderBy('applicant.lastName, applicant.firstName');
    $queryBuilder->setParameter('applicationId', $application->getId());

    $applicants = array();
    foreach($queryBuilder->getQuery()->getArrayResult() as $app){
      $applicants[] = $app['id'];
    }
    return $applicants;
  }

  /**
   * All the applicants in an application
   * @param Application $application
   * @param Tag $tag
   * @return array
   */
  public function findTaggedByApplication(Application $application, Tag $tag)
  {
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
    $queryBuilder->add('select', 'applicant');
    $queryBuilder->leftJoin('applicant.tags', 'tags');

    $queryBuilder->where('applicant.application = :applicationId');
    $queryBuilder->setParameter('applicationId', $application->getId());
    $queryBuilder->andWhere('applicant.deactivated=false');

    $queryBuilder->andWhere(':tagId MEMBER OF applicant.tags');
    $queryBuilder->setParameter('tagId', $tag->getId());

    $queryBuilder->orderBy('applicant.lastName, applicant.firstName');

    return $queryBuilder->getQuery()->getResult();
  }

  /**
   * All the deactivated applicants in an application
   * @param Application $application
   * @return array
   */
  public function findDeactivatedByApplication(Application $application)
  {
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
    $queryBuilder->add('select', 'applicant');
    $queryBuilder->where('applicant.application = :applicationId');
    $queryBuilder->andWhere('applicant.deactivated=true');
    $queryBuilder->orderBy('applicant.lastName, applicant.firstName');
    $queryBuilder->setParameter('applicationId', $application->getId());

    return $queryBuilder->getQuery()->getResult();
  }

  /**
   * Find a single application
   * @param integer id of the applicant
   * @param boolean $deep should we load the full data for each applicant
   * @pram Display $display
   * @return Application
   */
  public function find($id, $deep = false, Display $display = null)
  {
    if (!$deep) {
      $queryBuilder = $this->_em->createQueryBuilder();
      $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
      $queryBuilder->add('select', 'applicant');
    } else {
      $queryBuilder = $this->deepApplicantQuery($display);
    }

    $queryBuilder->andWhere('applicant.id = :applicantId');
    $queryBuilder->setParameter('applicantId', $id);

    return $queryBuilder->getQuery()->getSingleResult();
  }

  /**
   * Find a single applicant in an array format
   * @param integer $id of the applicant
   * @param \Jazzee\Interfaces\Display $display
   * 
   * @return array
   */
  public function findArray($id, \Jazzee\Interfaces\Display $display = null)
  {
    $cache = \Jazzee\Controller::getCache();
    $cacheId = Applicant::ARRAY_CACHE_PREFIX . $id;
    $cacheId .= is_null($display)?'nodisplay':$display->getId();
    if($cache->contains($cacheId)){
      return $cache->fetch($cacheId);
    }
    $queryBuilder = $this->deepApplicantQuery($display);
    $queryBuilder->andWhere('applicant = :applicantId');
    $queryBuilder->setParameter('applicantId', $id);
    
    $query = $queryBuilder->getQuery();
    $query->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true);
    $applicantArray = $query->getSingleResult('ApplicantArrayHydrator');
    $cache->save($cacheId, $applicantArray);
    return $applicantArray;
  }
  
  /**
   * Get a deep application query builder
   * @param \Jazzee\Interfaces\Display $display
   * 
   * @return \Doctrine\ORM\QueryBuilder
   */
  protected function deepApplicantQuery(\Jazzee\Interfaces\Display $display = null){
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->from('Jazzee\Entity\Applicant', 'applicant');
    $queryBuilder->add('select', 'applicant, attachments, decision, tags, answers, element_answers, publicStatus, privateStatus, payment, children, children_element_answers, children_publicStatus, children_privateStatus, children_payment');
    if($display){
      $expression = $queryBuilder->expr()->orX();
      //this one is the default - if there are no pages in the display then this 
      //expression is the only one that will load and not pages will be loaded
      $expression->add($queryBuilder->expr()->eq("answers.page", ":nothing"));
      $queryBuilder->setParameter('nothing', 'nothing');
      foreach($display->getPageIds() as $key => $pageId){
        $paramKey = 'displayPage' . $key;
        $expression->add($queryBuilder->expr()->eq("answers.page", ":{$paramKey}"));
        $queryBuilder->setParameter($paramKey, $pageId);
      }
      $queryBuilder->leftJoin('applicant.answers', 'answers', 'WITH', $expression);
    } else {
      $queryBuilder->leftJoin('applicant.answers', 'answers');
    }
    $queryBuilder->leftJoin('answers.elements', 'element_answers');
    $queryBuilder->leftJoin('answers.publicStatus', 'publicStatus');
    $queryBuilder->leftJoin('answers.privateStatus', 'privateStatus');
    $queryBuilder->leftJoin('applicant.attachments', 'attachments');
    $queryBuilder->leftJoin('applicant.decision', 'decision');
    $queryBuilder->leftJoin('applicant.tags', 'tags');
    $queryBuilder->leftJoin('answers.payment', 'payment');
    $queryBuilder->leftJoin('answers.children', 'children');
    $queryBuilder->leftJoin('children.elements', 'children_element_answers');
    $queryBuilder->leftJoin('children.publicStatus', 'children_publicStatus');
    $queryBuilder->leftJoin('children.privateStatus', 'children_privateStatus');
    $queryBuilder->leftJoin('children.payment', 'children_payment');
    $queryBuilder->where('answers.parent IS NULL');
    
    
    return $queryBuilder;
  }

  /**
   * Find applicants by name
   *
   * @param \stdClass $obj
   * @param \Jazzee\Controller $controller
   * @param Application $application
   * @return array Applicant
   */
  public function findApplicantsByQuery(\stdClass $obj, \Jazzee\Controller $controller, Application $application = null)
  {
    $queryBuilder = $this->_em->createQueryBuilder();
    $queryBuilder->add('select', 'a')
            ->from('Jazzee\Entity\Applicant', 'a');

    if (!is_null($application)) {
      $queryBuilder->where('a.application = :applicationId');
      $queryBuilder->setParameter('applicationId', $application->getId());
    }
    if (isset($obj->applicant)) {
      foreach (array('email', 'firstName', 'lastName', 'middleName', 'suffix') as $name) {
        if (isset($obj->applicant->$name) and !is_null($obj->applicant->$name)) {
          $queryBuilder->andWhere("a.{$name} LIKE :{$name}");
          $queryBuilder->setParameter($name, $obj->applicant->$name);
        }
      }
      foreach (array('lastLogin', 'createdAt', 'updatedAt') as $name) {
        if (isset($obj->applicant->$name) and !is_null($obj->applicant->$name)) {
          $queryBuilder->andWhere("a.{$name} >= :{$name}");
          $queryBuilder->setParameter($name, $obj->applicant->$name);
        }
      }
      if (isset($obj->applicant->isLocked) and !is_null($obj->applicant->isLocked)) {
        $queryBuilder->andWhere("a.isLocked = :isLocked");
        $queryBuilder->setParameter('isLocked', $obj->applicant->isLocked);
      }
    }

    if (isset($obj->decision)) {
      $queryBuilder->innerJoin('a.decision', 'd');
      foreach (array('nominateAdmit', 'nominateDeny', 'finalAdmit', 'finalDeny', 'acceptOffer', 'declineOffer') as $name) {
        if (isset($obj->decision->$name) and $obj->decision->$name == true) {
          $queryBuilder->andWhere("d.{$name} IS NOT NULL");
        }
      }
    }
    $queryBuilder->andWhere('a.deactivated=false');
    $queryBuilder->orderBy('a.lastName, a.firstName');
    $applicants = $queryBuilder->getQuery()->getResult();

    foreach ($obj->pages as $pageObj) {
      foreach ($applicants as $key => $applicant) {
        if ($applicationPage = $applicant->getApplication()->getApplicationPageByTitle($pageObj->title)) {
          $applicationPage->getJazzeePage()->setApplicant($applicant);
          $applicationPage->getJazzeePage()->setController($controller);
          if (!$applicationPage->getJazzeePage()->testQuery($pageObj->query)) {
            unset($applicants[$key]);
          }
        }
      }
    }

    return $applicants;
  }

  /**
   * Reset all the failed login counter for applicants
   */
  public function resetFailedLoginCounters()
  {
    $query = $this->_em->createQuery('UPDATE Jazzee\Entity\Applicant a SET a.failedLoginAttempts = 0 WHERE a.failedLoginAttempts > 0');
    $query->execute();
  }

  /**
   * Reset all the unique ids
   */
  public function resetUniqueIds()
  {
    $query = $this->_em->createQuery('UPDATE Jazzee\Entity\Applicant a SET a.uniqueId = null WHERE a.uniqueId IS NOT NULL');
    $query->execute();
  }

}

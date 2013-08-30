<?php

namespace Jazzee\CommonBundle\Repository;

/**
 * Thread Repository
 * Special Repository methods for Threads
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class Thread extends \Doctrine\ORM\EntityRepository
{

    /**
     * Find all the threads for an application
     *
     * @param Application $application
     * @return Array $threads
     */
    public function findByApplication(Application $application)
    {
        $query = $this->_em->createQuery(
            'SELECT t FROM Jazzee\CommonBundle\Entity\Thread t WHERE t.applicant IN ' .
            '(SELECT a.id from \Jazzee\CommonBundle\Entity\Applicant a WHERE ' .
            'a.application = :applicationId) order by t.createdAt DESC'
        );
        $query->setParameter('applicationId', $application->getId());

        return $query->getResult();
    }
}

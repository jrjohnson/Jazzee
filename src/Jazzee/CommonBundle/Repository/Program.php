<?php

namespace Jazzee\CommonBundle\Repository;

/**
 * Program Repository
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class Program extends \Doctrine\ORM\EntityRepository
{

    /**
     * find all non expired programs ordered by name
     *
     * @return Doctrine\Common\Collections\Collection $programs
     */
    public function findAllActive()
    {
        $query = $this->_em->createQuery(
            'SELECT p FROM Jazzee\CommonBundle\Entity\Program p WHERE ' .
            'p.isExpired=false order by p.name'
        );

        return $query->getResult();
    }
}

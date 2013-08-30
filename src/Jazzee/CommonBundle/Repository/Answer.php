<?php

namespace Jazzee\CommonBundle\Repository;

/**
 * AnswerRepository
 * Special Repository methods for answers
 *
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class Answer extends \Doctrine\ORM\EntityRepository
{

    /**
     * Find any unmatched score answers for a page
     * @param \Jazzee\CommonBundle\Entity\Page $page
     * @return array
     */
    public function findUnMatchedScores(Page $page)
    {
        $query = 'SELECT a, e FROM Jazzee\CommonBundle\Entity\Answer a '.
            'LEFT JOIN a.elements e '.
            'WHERE a.page = :pageId AND a.pageStatus IS NULL ' .
            'AND a.greScore IS NULL AND a.toeflScore IS NULL';

        $query = $this->_em->createQuery($query);
        $query->setParameter('pageId', $page->getId());
        $query->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true);

        return $query->getArrayResult();
    }
}

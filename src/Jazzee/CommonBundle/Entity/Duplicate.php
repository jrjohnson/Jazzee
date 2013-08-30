<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * Duplicate
 * Identify Duplicate applicants
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class Duplicate
{

    protected $id;
    protected $isIgnored = false;
    private $applicant;
    protected $duplicate;

    /**
     * Get the ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set applicant
     *
     * @param Applicant $applicant
     */
    public function setApplicant($applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * Get applicant
     *
     * @return Applicant $applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set duplicate
     *
     * @param Applicant $applicant
     */
    public function setDuplicate($applicant)
    {
        $this->duplicate = $applicant;
    }

    /**
     * Get duplicate
     *
     * @return Applicant $applicant
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Ignore this duplicate
     *
     */
    public function ignore()
    {
        $this->isIgnored = true;
    }

    /**
     * UnIgnore this duplicate
     *
     */
    public function unIgnore()
    {
        $this->isIgnored = false;
    }

    /**
     * Is this duplicate ignored
     * @return boolean
     */
    public function isIgnored()
    {
        return $this->isIgnored;
    }
}

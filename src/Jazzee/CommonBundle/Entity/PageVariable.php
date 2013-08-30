<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * PageVariable
 * Allow developers to store arbitrary data as a PageVariable
 * so we don't need new tables for every new ApplyPage type
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class PageVariable
{

    protected $id;
    private $page;
    protected $name;
    protected $value;

    /**
     * Get id
     *
     * @return bigint $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Replace Page UUID
     *
     * When a variable is modified it changes its parents UUID
     */
    public function replacePageUuid()
    {
        $this->page->replaceUuid();
    }

    /**
     * Set page
     *
     * @param Entity\Page $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = base64_encode($value);
    }

    /**
     * Get value
     *
     * @return string $value
     */
    public function getValue()
    {
        return base64_decode($this->value);
    }
}

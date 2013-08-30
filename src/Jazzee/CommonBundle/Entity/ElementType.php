<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * ElementType
 * The ApplyElement class we are going to use for an element
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class ElementType
{

    protected $id;
    protected $name;
    protected $class;

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
     * Set class
     *
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Get class
     *
     * @return string $class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Get nice class name usable by CSS
     *
     * @return string
     */
    public function getNiceClass()
    {
        return str_replace('\\', '', $this->class);
    }
}

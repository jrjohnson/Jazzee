<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * ElementListItemVariable
 * Allow developers to store arbitrary data as a ElementListItemVariable
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class ElementListItemVariable
{

    protected $id;
    protected $item;
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
     * Set item
     *
     * @param Jazzee\CommonBundle\Entity\ElementListItem $item
     */
    public function setItem(\Jazzee\CommonBundle\Entity\ElementListItem $item)
    {
        $this->item = $item;
    }

    /**
     * Get item
     *
     * @return Jazzee\CommonBundle\Entity\ElementListItem $item
     */
    public function getItem()
    {
        return $thhis->item;
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
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }
}

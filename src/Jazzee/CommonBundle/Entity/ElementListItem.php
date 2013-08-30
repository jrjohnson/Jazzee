<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * ElementListItem
 * Elements like selects and checkboxes have list items
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class ElementListItem
{

    protected $id;
    protected $element;
    protected $weight;
    protected $active = true;
    protected $value;
    protected $name;
    protected $variables;

    /**
     * Constructor to create a default blank array for metadata
     */
    public function __construct()
    {
        $this->variables = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Generate a Temporary id
     *
     * This should only be used when we need to termporarily generate an item
     * but have no intention of persisting it.  Use a string to be sure we cant persist
     */
    public function tempId()
    {
        $this->id = uniqid('item');
    }

    /**
     * Replace Page UUID
     *
     * When an list items is modified it changes its page's UUID
     */
    public function replacePageUuid()
    {
        $this->element->replacePageUuid();
    }

    /**
     * Set element
     *
     * @param Entity\Element $element
     */
    public function setElement(Element $element)
    {
        $this->element = $element;
    }

    /**
     * get element
     *
     * @return Entity\Element $element
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get weight
     *
     * @return integer $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Make item active
     */
    public function activate()
    {
        $this->active = true;
    }

    /**
     * Deactivate item
     */
    public function deactivate()
    {
        $this->active = false;
    }

    /**
     * Check if item is active
     * @return boolean $active
     */
    public function isActive()
    {
        return $this->active;
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

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {

        if (empty($name)) {
            $this->name = null;
        } else {
            $this->name = preg_replace('#[^a-zA-Z0-9_]#', '', $name);
        }
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getname()
    {
        return $this->name;
    }

    /**
     * Set item variable
     *
     * @param string $name
     * @param string $value
     *
     * @return \Jazzee\CommonBundle\Entity\ElementItemVariable
     */
    public function setVar($name, $value)
    {
        foreach ($this->variables as $variable) {
            if ($variable->getName() == $name) {
                $variable->setValue($value);

                return $variable;
            }
        }
        //create a new empty variable with that name
        $variable = new ElementListItemVariable;
        $variable->setItem($this);
        $variable->setName($name);
        $this->variables[] = $variable;
        $variable->setValue($value);

        return $variable;
    }

    /**
     * get element variable
     * @param  string $name
     * @return string $value
     */
    public function getVar($name)
    {
        foreach ($this->variables as $variable) {
            if ($variable->getName() == $name) {
                return $variable->getValue();
            }
        }
    }

    /**
     * get item variables
     * @return array \Jazzee\CommonBundle\Entity\ElementListItemVariable
     */
    public function getVariables()
    {
        return $this->variables;
    }
}

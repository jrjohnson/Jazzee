<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * DisplayElement
 * Controls display variables for a single element
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class DisplayElement
{

    protected $id;
    protected $type;
    protected $title;
    private $name;
    protected $weight;
    private $display;
    protected $element;
    protected $page;

    /**
     * Setup with a defined type
     * @param string $type
     * @throws \Exception
     */
    public function __construct($type)
    {
        if (!in_array($type, array('applicant', 'element', 'page'))) {
            throw new \Exception(
                "{$type} is not a valid type for DisplayElements"
            );
        }
        $this->type = $type;
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        if (!in_array($this->type, array('applicant', 'page'))) {
            throw new \Exception(
                "You cannot set name for DisplayElements that do not " .
                "have the type 'applicant' or 'page'"
            );
        }
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        switch ($this->type) {
            case 'applicant':
            case 'page':
                return $this->name;
                break;
            case 'element':
                return $this->element->getId();
                break;
        }

        throw new \Exception(
            "Cannot get name for {$this->type} DisplayElement type"
        );
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get element
     *
     * @return Element
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set element
     *
     * @param Element $element
     */
    public function setElement(Element $element)
    {
        if ($this->type != 'element') {
            throw new \Excption(
                "You cannot set Element for DisplayElements " .
                "that do not have the type 'element'"
            );
        }
        $this->element = $element;
        $this->name = $this->element->getId();
    }

    /**
     * Get page
     *
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set page
     *
     * @param Page $page
     */
    public function setPage(Page $page)
    {
        if ($this->type != 'page') {
            throw new \Exception(
                "You cannot set Page for DisplayElements that " .
                "do not have the type 'page'"
            );
        }
        $this->page = $page;
    }

    /**
     * Get display
     *
     * @return \Jazzee\CommonBundle\Entity\Display
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set the display
     *
     * @param \Jazzee\CommonBundle\Entity\Display $display
     */
    public function setDisplay(\Jazzee\CommonBundle\Entity\Display $display)
    {
        $this->display = $display;
    }

    /**
     * Create a new display element from the Elements of another display
     * @param \Jazzee\Display\Element                 $originalElement
     * @param \Jazzee\CommonBundle\Entity\Application $application
     *
     * @return \Jazzee\CommonBundle\Entity\DisplayElement
     */
    public static function createFromDisplayElement(
        \Jazzee\Display\Element $originalElement,
        Application $application
    ) {
        $displayElement = new \DisplayElement($originalElement->type);
        switch ($originalElement->type) {
            case 'element':
                $element = $application->getElementById($originalElement->name);
                if (!$element) {
                    throw new \Exception(
                        "{$originalElement->name} is not a valid Jazzee " .
                        "Element ID, so it cannot be used in a 'element' " .
                        "display element.  Element: " .
                        var_export($originalElement, true)
                    );
                }
                $displayElement->setElement($element);
                break;
            case 'page':
                $applicationPage = $application->
                    getApplicationPageByPageId($originalElement->pageId);
                if (!$applicationPage) {
                    $applicationPage = $application
                        ->getApplicationPageByChildPageId(
                            $originalElement->pageId
                        );
                }
                if (!$applicationPage) {
                    throw new \Exception(
                        "{$originalElement->pageId} is not a valid Page ID, " .
                        "so it cannot be used in a 'page' display element.  " .
                        "Element: " . var_export($originalElement, true)
                    );
                }
                $displayElement->setPage($applicationPage->getPage());
                //fallthrough
            case 'applicant':
                $displayElement->setName($originalElement->name);
                break;
        }
        $displayElement->setTitle($originalElement->title);
        $displayElement->setWeight($originalElement->weight);

        return $displayElement;
    }
}

<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * PageType
 * The ApplyPage class we are going to use
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class PageType
{

    protected $id;
    protected $name;
    protected $routeLoaderService;
    protected $bundleName;

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
     * Set routeLoaderService
     *
     * @param string $name
     */
    public function setRouteLoaderService($name)
    {
        $this->routeLoaderService = $name;
    }

    /**
     * Get routeLoaderService
     *
     * @return string
     */
    public function getRouteLoaderService()
    {
        return $this->routeLoaderService;
    }

    /**
     * Set the bundle name
     * @param string $name
     */
    public function setBundleName($name)
    {
        $this->bundleName = $name;
    }

    /**
     * Get the bundle name
     * @return string
     */
    public function getBundleName()
    {
        return $this->bundleName;
    }
}

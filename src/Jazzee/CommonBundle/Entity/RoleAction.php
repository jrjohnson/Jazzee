<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * RoleAction
 * Actions allowed by this Role
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class RoleAction
{

    protected $id;
    protected $role;
    protected $controller;
    protected $action;

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
     * Set controller
     *
     * @param string $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * Get controller
     *
     * @return string $controller
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set action
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = strtolower($action);
    }

    /**
     * Get action
     *
     * @return string $action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * set role
     *
     * @param \Jazzee\CommonBundle\Entity\Role $role
     */
    public function setRole(\Jazzee\CommonBundle\Entity\Role $role)
    {
        $this->role = $role;
    }

    /**
     * get role
     *
     * @return \Jazzee\CommonBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }
}

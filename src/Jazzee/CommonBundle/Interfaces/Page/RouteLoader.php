<?php

namespace Jazzee\CommonBundle\Interfaces\Page;

use \Jazzee\CommonBundle\Entity\ApplicationPage;
use Symfony\Component\Routing\RouteCollection;

/**
 * Pages build their routes as services which are 
 * refreshed with the routing cache
 */
interface RouteLoader
{
    /**
     * Add routes to the collection
     * @param \Jazzee\CommonBundle\Entity\ApplicationPage $applicationPage
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     */
    public function addApplicationPageRoutes(
        ApplicationPage $applicationPage,
        RouteCollection $routeCollection
    );
}

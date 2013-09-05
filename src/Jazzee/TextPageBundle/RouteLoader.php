<?php
namespace Jazzee\TextPageBundle;

use Jazzee\CommonBundle\Entity\ApplicationPage;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RouteBuilder
 *
 * @author jon
 */
class RouteLoader implements \Jazzee\CommonBundle\Interfaces\Page\RouteLoader
{
    public function addApplicationPageRoutes(
        ApplicationPage $applicationPage,
        RouteCollection $routeCollection
    ) {
        $patern =
            '/' .
            $applicationPage->getApplication()
                ->getProgram()->getShortName() .
            '/' .
            $applicationPage->getApplication()->getCycle()->getName() .
            '/page/' .
            $applicationPage->getWeight();
        $defaults = array(
            '_controller' => 'JazzeeTextPageBundle:ApplicationPage:index',
            'programShortName' => $applicationPage->getApplication()->getProgram()->getShortName(),
            'cycleName' => $applicationPage->getApplication()->getCycle()->getName(),
            'applicationPageId' => $applicationPage->getId()
        );
        $route = new Route($patern, $defaults, array());
        $routeName = $applicationPage->getBaseRouteName();
        $routeCollection->add($routeName, $route);
    }
}

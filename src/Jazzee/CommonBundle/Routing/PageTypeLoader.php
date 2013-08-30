<?php

namespace Jazzee\CommonBundle\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Doctrine\Bundle\DoctrineBundle\Registry;

class PageTypeLoader extends Loader
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * Setup with the tntity manager.
     * @param Doctrine\Bundle\DoctrineBundle\Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->em = $registry->getEntityManager();
    }
    
    public function load($resource, $type = null)
    {
        $routes = new RouteCollection();
        
        $applicationPages = 
            $this->em->getRepository('JazzeeCommonBundle:ApplicationPage')
                ->findAll();
        foreach($applicationPages as $applicationPage){
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
            $routeName = str_replace('/', '', $patern);
            $routes->add($routeName, $route);
            
        }

        return $routes;
    }

    public function supports($resource, $type = null)
    {
        return $type === 'pagetype';
    }
}
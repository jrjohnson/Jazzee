<?php

namespace Jazzee\CommonBundle\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Jazzee\CommonBundle\Interfaces\Page\RouteLoader;

class PageTypeLoader extends Loader
{

    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    /**
     * Setup with the entity manager.
     * @param Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param Doctrine\Bundle\DoctrineBundle\Registry $registry
     */
    public function __construct(Container $container, Registry $registry)
    {
        $this->container = $container;
        $this->em = $registry->getManager();
    }

    public function load($resource, $type = null)
    {
        $routes = new RouteCollection();

        $applicationPages =
            $this->em->getRepository('JazzeeCommonBundle:ApplicationPage')
            ->findAll();
        foreach ($applicationPages as $applicationPage) {
            $service = $applicationPage->getPage()
                            ->getType()->getRouteLoaderService();
            if (!$this->container->has($service)) {
                throw new \Exception(
                    "Unable to load the service {$service} for the page type " .
                    $applicationPage->getPage()->getType()->getName() .
                    ".  Maybe the bundle " .
                    $applicationPage->getPage()->getType()->getBundleName() .
                    ' is not loaded?'
                );
            }
            $routeBuilder = $this->container->get($service);
            if ($routeBuilder instanceof RouteLoader) {
                $routeBuilder
                    ->addApplicationPageRoutes($applicationPage, $routes);
            }
        }

        return $routes;
    }

    public function supports($resource, $type = null)
    {
        return $type === 'pagetype';
    }
}

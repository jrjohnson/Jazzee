<?php

namespace Jazzee\CommonBundle\Security;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\Router;

class EventListener
{
    /**
     * @var \Symfony\Component\Routing\Router
     */
    protected $router;
    
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        
        $programShortname = $event->getRequest()->get('programShortName');
        $cycleName = $event->getRequest()->get('cycleName');
        $this->router->getContext()->setParameter(
            'programShortName',
            $programShortname
        );
        $this->router->getContext()->setParameter(
            'cycleName',
            $cycleName
        );
    }
}
<?php

namespace Jazzee\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $programs = $em->getRepository('JazzeeCommonBundle:Program')
            ->findBy(array('isExpired' => false), array('name' => 'asc'));

        return $this->render(
            'JazzeeCommonBundle:Welcome:index.html.twig',
            array('programs' => $programs)
        );
    }
}

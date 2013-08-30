<?php

namespace Jazzee\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationWelcomeController extends Controller
{

    public function indexAction($programShortName, $cycleName)
    {
        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository('JazzeeCommonBundle:Application')
            ->findByProgramAndCycleName($programShortName, $cycleName);
        if (!$application or !$application->isPublished()) {
            throw $this->createNotFoundException();
        }

        return $this->render(
            'JazzeeCommonBundle:ApplicationWelcome:index.html.twig',
            array('application' => $application)
        );
    }
}

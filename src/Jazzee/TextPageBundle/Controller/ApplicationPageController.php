<?php

namespace Jazzee\TextPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationPageController extends Controller
{
    public function indexAction($programShortName, $cycleName, $applicationPageId)
    {
        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository('JazzeeCommonBundle:Application')
            ->findByProgramAndCycleName($programShortName, $cycleName);
        if (!$application or !$application->isPublished()) {
            throw $this->createNotFoundException();
        }
        $applicationPage = $application
            ->getApplicationPageById($applicationPageId);
        if(!$applicationPage){
            throw $this->createNotFoundException();
        }

        return $this->render(
            'JazzeeTextPageBundle:ApplicationPage:index.html.twig',
            array(
                'application' => $application,
                'applicationPage' => $applicationPage
            )
        );
    }
}

<?php

namespace Jazzee\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgramWelcomeController extends Controller
{

    public function indexAction($programShortName)
    {
        $em = $this->getDoctrine()->getManager();
        $program = $em->getRepository('JazzeeCommonBundle:Program')
            ->findOneBy(
                array('isExpired' => false, 'shortName' => $programShortName)
            );
        if (!$program) {
            throw $this->createNotFoundException();
        }
        $applications = $em->getRepository('JazzeeCommonBundle:Application')
            ->findByProgram($program, true, true);

        return $this->render(
            'JazzeeCommonBundle:ProgramWelcome:index.html.twig',
            array('program' => $program, 'applications' => $applications)
        );
    }
}

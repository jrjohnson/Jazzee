<?php

namespace Jazzee\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class ApplicantLoginController extends Controller
{
    public function loginAction($programShortName, $cycleName)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();

        $application = $em->getRepository('JazzeeCommonBundle:Application')
            ->findByProgramAndCycleName($programShortName, $cycleName);
        if (!$application or !$application->isPublished()) {
            throw $this->createNotFoundException();
        }

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'JazzeeCommonBundle:ApplicantLogin:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
                'application'   => $application
            )
        );
    }
}

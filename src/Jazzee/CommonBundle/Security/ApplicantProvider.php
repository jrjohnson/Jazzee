<?php

namespace Jazzee\CommonBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Request;
use Jazzee\CommonBundle\Entity\Applicant;

class ApplicantProvider implements UserProviderInterface
{

    /**
     *
     * @var Symfony\Component\HttpFoundation\Request
     */
    protected $request;

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

    /**
     * The correct request object will be passed by symfony each time this
     * class is loaded.
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    /**
     * FInd an applicant in their program
     * @param string $email
     * @throws UsernameNotFoundException
     */
    public function loadUserByUsername($email)
    {
        if (null === $this->request) {
            throw new \Exception("Unable to get the request object.");
        }

        $programShortName = $this->request->get('programShortName');
        $cycleName = $this->request->get('cycleName');
        $application =
            $this->em->getRepository('JazzeeCommonBundle:Application')
            ->findByProgramAndCycleName($programShortName, $cycleName);
        if ($application) {
            $applicant =
                $this->em->getRepository('JazzeeCommonBundle:Applicant')
                ->findOneBy(
                    array('email' => $email, 'application' => $application)
                );
            if ($applicant) {
                return $applicant;
            }
        }

        throw new UsernameNotFoundException(
            sprintf(
                'Email %s not found in %s %s',
                $email,
                $programShortName,
                $cycleName
            )
        );
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof Applicant) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    get_class($user)
                )
            );
        }
        $programShortName = $this->request->get('programShortName');
        $cycleName = $this->request->get('cycleName');
        $application = $this->em->getRepository('JazzeeCommonBundle:Application')
                ->findByProgramAndCycleName($programShortName, $cycleName);
        if ($application) {
            $applicant = $this->em
                ->getRepository('JazzeeCommonBundle:Applicant')->findOneBy(
                    array(
                        'id' => $user->getId(),
                        'application' => $application
                    )
                );
            if ($applicant) {
                return $applicant;
            }
        }

        throw new UsernameNotFoundException(
            sprintf(
                'Applicant %s not found in %s %s',
                $user->getId(),
                $programShortName,
                $cycleName
            )
        );
    }

    public function supportsClass($class)
    {
        return $class === 'Jazzee\CommonBundle\Entity\Applicant';
    }
}

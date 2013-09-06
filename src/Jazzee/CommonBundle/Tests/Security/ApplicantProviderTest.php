<?php

namespace Jazzee\CommonBundle\Test\Security;

use Jazzee\CommonBundle\Security\ApplicantProvider;
use Mockery as m;
use IC\Bundle\Base\TestBundle\Test\TestCase;

class AplicantProviderTest extends TestCase
{

    public function tearDown()
    {
        m::close();
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::loadUserByUsername
     */
    public function testNoRouterExceptionLoad()
    {
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $manager->shouldReceive('getRepository')->never();
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $registry->shouldReceive('getManager')->once()->andReturn($manager);

        $applicantProvider = new ApplicantProvider($registry);
        $this->setExpectedException('Exception');
        $applicantProvider->loadUserByUsername('test');
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::loadUserByUsername
     */
    public function testLoadUserByUsername()
    {
        $testAddress = 'test@localhost';
        $applicant = m::mock('\Jazzee\CommonBundle\Entity\Applicant');
        $applicantRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $application = m::mock('\Jazzee\CommonBundle\Entity\Application');
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $request = m::mock('\Symfony\Component\HttpFoundation\Request');

        $applicantRepository->shouldReceive('findOneBy')
            ->with(array('application' => $application, 'email' => $testAddress))
            ->once()->andReturn($applicant);
        $applicationRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $applicationRepository->shouldReceive('findByProgramAndCycleName')
            ->with('pshortname', 'cname')
            ->once()->andReturn($application);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Application')
            ->once()->andReturn($applicationRepository);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Applicant')
            ->once()->andReturn($applicantRepository);
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $request->shouldReceive('get')->with('programShortName')->once()->andReturn('pshortname');
        $request->shouldReceive('get')->with('cycleName')->once()->andReturn('cname');


        $applicantProvider = new ApplicantProvider($registry);
        $applicantProvider->setRequest($request);

        $this->assertSame($applicant, $applicantProvider->loadUserByUsername($testAddress));
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::loadUserByUsername
     */
    public function testNoUserByUsername()
    {
        $testAddress = 'test@localhost';
        $applicant = m::mock('\Jazzee\CommonBundle\Entity\Applicant');
        $applicantRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $application = m::mock('\Jazzee\CommonBundle\Entity\Application');
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $request = m::mock('\Symfony\Component\HttpFoundation\Request');

        $applicantRepository->shouldReceive('findOneBy')
            ->with(array('application' => $application, 'email' => $testAddress))
            ->once()->andReturn(false);
        $applicationRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $applicationRepository->shouldReceive('findByProgramAndCycleName')
            ->with('pshortname', 'cname')
            ->once()->andReturn($application);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Application')
            ->once()->andReturn($applicationRepository);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Applicant')
            ->once()->andReturn($applicantRepository);
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $request->shouldReceive('get')->with('programShortName')->once()->andReturn('pshortname');
        $request->shouldReceive('get')->with('cycleName')->once()->andReturn('cname');


        $applicantProvider = new ApplicantProvider($registry);
        $applicantProvider->setRequest($request);

        $this->setExpectedException('\Symfony\Component\Security\Core\Exception\UsernameNotFoundException');
        $applicantProvider->loadUserByUsername($testAddress);
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::loadUserByUsername
     */
    public function testNoApplicationLoad()
    {
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $request = m::mock('\Symfony\Component\HttpFoundation\Request');

        $applicationRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $applicationRepository->shouldReceive('findByProgramAndCycleName')
            ->with('pshortname', 'cname')
            ->once()->andReturn(false);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Application')
            ->once()->andReturn($applicationRepository);
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $request->shouldReceive('get')->with('programShortName')->once()->andReturn('pshortname');
        $request->shouldReceive('get')->with('cycleName')->once()->andReturn('cname');

        $applicantProvider = new ApplicantProvider($registry);
        $applicantProvider->setRequest($request);

        $this->setExpectedException('\Symfony\Component\Security\Core\Exception\UsernameNotFoundException');
        $applicantProvider->loadUserByUsername('');
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::refreshUser
     */
    public function testRefreshUser()
    {
        $id = rand(1, 100);
        $applicant = m::mock('\Jazzee\CommonBundle\Entity\Applicant');
        $applicantRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $application = m::mock('\Jazzee\CommonBundle\Entity\Application');
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $request = m::mock('\Symfony\Component\HttpFoundation\Request');
        $user = m::mock('\Jazzee\CommonBundle\Entity\Applicant');

        $user->shouldReceive('getId')->once()->andReturn($id);
        $applicantRepository->shouldReceive('findOneBy')
            ->with(array('application' => $application, 'id' => $id))
            ->once()->andReturn($applicant);
        $applicationRepository = m::mock('\Doctrine\ORM\EntityRepository');
        $applicationRepository->shouldReceive('findByProgramAndCycleName')
            ->with('pshortname', 'cname')
            ->once()->andReturn($application);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Application')
            ->once()->andReturn($applicationRepository);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Applicant')
            ->once()->andReturn($applicantRepository);
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $request->shouldReceive('get')->with('programShortName')->once()->andReturn('pshortname');
        $request->shouldReceive('get')->with('cycleName')->once()->andReturn('cname');


        $applicantProvider = new ApplicantProvider($registry);
        $applicantProvider->setRequest($request);

        $this->assertSame($applicant, $applicantProvider->refreshUser($user));
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::refreshUser
     */
    public function testBadUserObjectRefresh()
    {
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $user = m::mock('Symfony\Component\Security\Core\User\UserInterface');

        $registry->shouldReceive('getManager')->once()->andReturn($manager);

        $applicantProvider = new ApplicantProvider($registry);

        $this->setExpectedException('\Symfony\Component\Security\Core\Exception\UnsupportedUserException');
        $applicantProvider->refreshUser($user);
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::refreshUser
     */
    public function testNoApplicationRefresh()
    {
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $request = m::mock('\Symfony\Component\HttpFoundation\Request');
        $user = m::mock('\Jazzee\CommonBundle\Entity\Applicant');
        $applicationRepository = m::mock('\Doctrine\ORM\EntityRepository');

        $user->shouldReceive('getId')->once();
        $applicationRepository->shouldReceive('findByProgramAndCycleName')
            ->with('pshortname', 'cname')->once()->andReturn(false);
        $manager->shouldReceive('getRepository')
            ->with('JazzeeCommonBundle:Application')
            ->once()->andReturn($applicationRepository);
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $request->shouldReceive('get')->with('programShortName')->once()->andReturn('pshortname');
        $request->shouldReceive('get')->with('cycleName')->once()->andReturn('cname');

        $applicantProvider = new ApplicantProvider($registry);
        $applicantProvider->setRequest($request);

        $this->setExpectedException('\Symfony\Component\Security\Core\Exception\UsernameNotFoundException');
        $applicantProvider->refreshUser($user);
    }

    /**
     * @covers \Jazzee\CommonBundle\Security\ApplicantProvider::refreshUser
     */
    public function testNoRouterExceptionRefresh()
    {
        $manager = m::mock('\Doctrine\ORM\EntityManager');
        $manager->shouldReceive('getRepository')->never();
        $registry = m::mock('\Doctrine\Bundle\DoctrineBundle\Registry');
        $registry->shouldReceive('getManager')->once()->andReturn($manager);
        $user = m::mock('\Jazzee\CommonBundle\Entity\Applicant');

        $applicantProvider = new ApplicantProvider($registry);
        $this->setExpectedException('Exception');
        $applicantProvider->refreshUser($user);
    }
}

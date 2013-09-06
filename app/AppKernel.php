<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Jazzee\CommonBundle\JazzeeCommonBundle(),
            new Jazzee\TextPageBundle\JazzeeTextPageBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Bazinga\Bundle\FakerBundle\BazingaFakerBundle();
        }

        if (in_array($this->getEnvironment(), array('test'))) {
            ini_set('memory_limit', -1);
            $bundles[] = new IC\Bundle\Base\TestBundle\ICBaseTestBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    public function getCacheDir()
    {
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            return sys_get_temp_dir() . '/jazzee/cache/' . $this->getEnvironment();
        }

        return parent::getCacheDir();
    }

    public function getLogDir()
    {
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            return sys_get_temp_dir() . '/jazzee/logs/';
        }

        return parent::getLogDir();
    }
}

<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
	public function registerBundles()
	{
		$bundles = array(
			/*
			 * Third party bundles.
			 */
			new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new \Symfony\Bundle\TwigBundle\TwigBundle(),
			new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
			new \Symfony\Bundle\MonologBundle\MonologBundle(),
			new \Symfony\Bundle\AsseticBundle\AsseticBundle(),
			new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
			new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
			new \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
			new \Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
			new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
			new \Sylius\Bundle\CategorizerBundle\SyliusCategorizerBundle(),
			new \Sylius\Bundle\BloggerBundle\SyliusBloggerBundle(),
			new \Sylius\Bundle\InstallerBundle\SyliusInstallerBundle(),
			new \Sylius\Bundle\GuardBundle\SyliusGuardBundle(),
		);

		if ($this->isDebug()) {
			$bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
		}

		return $bundles;
	}


	/**
	 * Register root dir.
	 */
	public function registerRootDir()
	{
		return __DIR__;
	}


	/**
	 * Register dependency injection container configuration.
	 */
	public function registerContainerConfiguration(LoaderInterface $loader)
	{
		$loader->load(__DIR__.'/config/container/'.$this->getEnvironment().'.yml');
	}
}

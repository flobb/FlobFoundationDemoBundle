<?php

namespace FlorianBelhomme\Bundle\FoundationDemoBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FlorianBelhommeFoundationDemoExtension extends Extension
{
    
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        // Add this bundle to assetic
        $asseticBundles = $container->getParameter('assetic.bundles');
        $asseticBundles[] = 'FlorianBelhommeFoundationDemoBundle';
        $container->setParameter('assetic.bundles', $asseticBundles);
    }
}

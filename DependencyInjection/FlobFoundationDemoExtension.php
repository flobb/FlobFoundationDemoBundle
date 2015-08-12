<?php

namespace Flob\Bundle\FoundationDemoBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FlobFoundationDemoExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        // Add this bundle to assetic
        $asseticBundles = $container->getParameter('assetic.bundles');
        $asseticBundles[] = 'FlobFoundationDemoBundle';
        $container->setParameter('assetic.bundles', $asseticBundles);
    }
}

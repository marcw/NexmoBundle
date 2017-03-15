<?php

namespace MarcW\Bundle\NexmoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * MarcwNexmoExtension.
 *
 * @author Marc Weistroff <marc@weistroff.net>
 */
class MarcWNexmoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->getDefinition('marcw.nexmo.client.credentials.basic')->replaceArgument(0, $config['api_key']);
        $container->getDefinition('marcw.nexmo.client.credentials.basic')->replaceArgument(1, $config['api_secret']);
    }
}

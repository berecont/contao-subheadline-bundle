<?php
declare(strict_types=1);

namespace Berecont\ContaoSubheadlineBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class BerecontContaoSubheadlineExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        // Lädt die Bundle-Config aus /config
        $loader = new YamlFileLoader($container, new FileLocator(\dirname(__DIR__, 2).'/config'));
        $loader->load('services.yaml');
    }

    public function getAlias(): string
    {
        return 'berecont_contao_subheadline';
    }    
}
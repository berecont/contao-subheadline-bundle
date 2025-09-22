<?php

declare(strict_types=1);

namespace Berecont\ContaoSubheadlineBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Berecont\ContaoSubheadlineBundle\BerecontContaoSubheadlineBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(BerecontContaoSubheadlineBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
<?php

declare(strict_types=1);

namespace Berecont\ContaoSubheadlineBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Berecont\ContaoSubheadlineBundle\DependencyInjection\BerecontContaoSubheadlineExtension;

final class BerecontContaoSubheadlineBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new BerecontContaoSubheadlineExtension();
    }
}
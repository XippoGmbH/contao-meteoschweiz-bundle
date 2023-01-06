<?php

/*
 * This file is part of xippogmbh/meteoschweiz-bundle.
 *
 * (c) Aurelio Gisler (Xippo GmbH)
 *
 * @license LGPL-3.0-or-later
 */

namespace XippoGmbH\MeteoschweizBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use XippoGmbH\MeteoschweizBundle\XippoGmbHMeteoschweizBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(XippoGmbHMeteoschweizBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}

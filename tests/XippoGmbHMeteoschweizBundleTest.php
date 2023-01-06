<?php

/*
 * This file is part of xippogmbh/meteoschweiz-bundle.
 *
 * (c) Aurelio Gisler (Xippo GmbH)
 *
 * @license LGPL-3.0-or-later
 */

namespace XippoGmbH\MeteoschweizBundle\Tests;

use XippoGmbH\MeteoschweizBundle\XippoGmbHMeteoschweizBundle;
use PHPUnit\Framework\TestCase;

class XippoGmbHMeteoschweizBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new XippoGmbHMeteoschweizBundle();

        $this->assertInstanceOf('XippoGmbH\MeteoschweizBundle\XippoGmbHMeteoschweizBundle', $bundle);
    }
}

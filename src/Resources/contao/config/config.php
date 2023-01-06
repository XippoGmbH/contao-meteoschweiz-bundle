<?php
/*
 * This file is part of xippogmbh/meteoschweiz-bundle.
 *
 * (c) Aurelio Gisler (Xippo GmbH)
 *
 * @author     Aurelio Gisler
 * @package    XippoGmbHMeteoschweiz
 * @license    MIT
 * @see        https://github.com/xippoGmbH/contao-meteoschweiz-bundle
 *
 */
// Backend modules
// $GLOBALS['BE_MOD']['content']['xippo_meteoschweiz'] = ['tables' => ['tl_content']];

// Models
$GLOBALS['TL_MODELS']['tl_xippo_meteoschweiz'] = \XippoGmbH\MeteoschweizBundle\Model\Boot24Model::class;

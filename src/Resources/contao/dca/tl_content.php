<?php
// contao/dca/tl_content.php
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

$GLOBALS['TL_DCA']['tl_content']['fields']['meteoschweiz_xhtml'] = [
			'label' => &$GLOBALS['TL_LANG']['tl_content']['meteoschweiz_xhtml'],
			'inputType' => 'text',
			'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
    		'sql' => ['type' => 'string', 'length' => 255, 'default' => '']
		];
$GLOBALS['TL_DCA']['tl_content']['palettes']['xippo_meteoschweiz'] = '{type_legend},type,headline;{meteoschweiz_legend},meteoschweiz_xhtml;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space;';

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
declare(strict_types=1);

namespace XippoGmbH\MeteoschweizBundle\Controller;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\ContentModel;
use Contao\FilesModel;
use Contao\Frontend;
use Contao\Image;
use Contao\Model;
use Contao\Template;
use XippoGmbH\MeteoschweizBundle\Model\Boot24Model;
use XippoGmbH\MeteoschweizBundle\Model\MapsMarkerModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MeteoschweizController extends AbstractContentElementController
{
	private string $path;
	
	private function getWeatherSite()
	{
		$var = file_get_contents($this->path);

		$var = utf8_encode($var);
		
		return $var;
	}

    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
		$this->path = $model->meteoschweiz_xhtml;
		
		$template->weather = $this->getWeatherSite();

        return $template->getResponse();
    }
}

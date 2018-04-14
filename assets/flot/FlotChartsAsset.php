<?php
/**
 * FlotChartsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotChartsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotChartsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotChartsAsset',
 */

namespace p2m\assets\flot;

class FlotChartsAsset extends \p2m\assets\flot\FlotAssetBase
{
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.min.js',
				'jquery.colorhelpers.min.js',
				'jquery.flot.canvas.min.js',
				'jquery.flot.categories.min.js',
				'jquery.flot.crosshair.min.js',
				'jquery.flot.errorbars.min.js',
				'jquery.flot.fillbetween.min.js',
				'jquery.flot.image.min.js',
				'jquery.flot.navigate.min.js',
				'jquery.flot.pie.min.js',
				'jquery.flot.resize.min.js',
				'jquery.flot.selection.min.js',
				'jquery.flot.stack.min.js',
				'jquery.flot.symbol.min.js',
				'jquery.flot.threshold.min.js',
				'jquery.flot.time.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.min.js',
				'jquery.colorhelpers.min.js',
				'jquery.flot.canvas.min.js',
				'jquery.flot.categories.min.js',
				'jquery.flot.crosshair.min.js',
				'jquery.flot.errorbars.min.js',
				'jquery.flot.fillbetween.min.js',
				'jquery.flot.image.min.js',
				'jquery.flot.navigate.min.js',
				'jquery.flot.pie.min.js',
				'jquery.flot.resize.min.js',
				'jquery.flot.selection.min.js',
				'jquery.flot.stack.min.js',
				'jquery.flot.symbol.min.js',
				'jquery.flot.threshold.min.js',
				'jquery.flot.time.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

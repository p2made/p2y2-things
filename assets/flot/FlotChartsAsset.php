<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\flot\FlotChartsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\flot\FlotChartsAsset',
 */

namespace p2made\assets\flot; /* edit this if using elsewhere */

class FlotChartsAsset extends \p2made\assets\flot\FlotAssetBase
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/flot-##-version-##',
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
			//'p2made\assets\MorrisAsset',
			//'p2made\assets\flot\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['published']['sourcePath']);
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

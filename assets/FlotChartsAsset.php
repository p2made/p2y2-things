<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FlotChartsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/flot-0.8.3',
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
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3',
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
			//'p2made\assets\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

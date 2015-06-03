<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
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
				'jquery.flot.js',
				'jquery.flot.pie.js',
				'jquery.flot.resize.js',
				'jquery.flot.time.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/flot/0.8.3',
			'js' => [
				'jquery.flot.min.js',
				'jquery.flot.pie.min.js',
				'jquery.flot.resize.min.js',
				'jquery.flot.time.min.js',
			],
		],
		'depends' => [
			'p2made\assets\ExcanvasAsset',
			'p2made\assets\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

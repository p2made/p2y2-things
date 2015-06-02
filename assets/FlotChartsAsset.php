<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FlotChartsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/flot-0.8.3',
		'pub' => [
			'js' => [
				'jquery.flot.js',
				'jquery.flot.pie.js',
				'jquery.flot.resize.js',
				'jquery.flot.time.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js',
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

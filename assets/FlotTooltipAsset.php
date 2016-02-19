<?php
/**
 * FlotTooltipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FlotTooltipAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/jquery.flot.tooltip-0.8.5',
			'js' => [
				'jquery.flot.tooltip.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/flot.tooltip/0.8.5',
			'js' => [
				'jquery.flot.tooltip.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

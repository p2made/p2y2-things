<?php
/**
 * _ExampleAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\flot\_ExampleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\flot\_ExampleAsset',
 */

namespace p2made\assets\flot; /* edit this if using elsewhere */

class FlotTooltipAsset extends \p2made\assets\base\P2AssetBundle
{
	private $version = '0.8.7';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/flot.tooltip',
			'js' => [
				'js/jquery.flot.tooltip.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot.tooltip/' . $this->version,
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

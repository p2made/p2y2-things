<?php
/**
 * CircleButtonsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\CircleButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\CircleButtonsAsset',
 */

namespace p2made\assets;

class CircleButtonsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $version = '0.0.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-p2y2-things/assets/lib/pub',
			'css' => [
				'css/circle-buttons.css',
			],
			/*
			'js' => [
				'js/bootstrap-switch.min.js',
			],
			 */
		],
		/*
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		 */
		'depends' => [
			'p2made\assets\BootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

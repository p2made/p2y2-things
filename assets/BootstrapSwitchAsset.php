<?php
/**
 * BootstrapSwitchAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class BootstrapSwitchAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/bootstrap-switch-3.3.2/dist',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/bootstrap-switch/3.3.2/css/bootstrap3',
			'css' => [
				'bootstrap-switch.min.css',
			],
			'js' => [
				'bootstrap-switch/3.3.2/js/bootstrap-switch.min.js',
			],
		],
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

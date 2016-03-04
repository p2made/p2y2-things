<?php
/**
 * BootstrapPluginAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class BootstrapPluginAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/bootstrap/dist',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'bootstrap#/bootstrap/3.3.6',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapAsset',
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * BootstrapPluginAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class BootstrapPluginAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/bootstrap-3.3.4/dist',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'bootstrap#/bootstrap/3.3.4',
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

<?php
/**
 * BootstrapPluginAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class BootstrapPluginAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/bootstrap-3.3.4/dist',
		'pub' => [
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
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

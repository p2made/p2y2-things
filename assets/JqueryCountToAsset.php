<?php
/**
 * JqueryCountToAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class JqueryCountToAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/jquery-countTo',
		'pub' => [
			'js' => [
				'jquery.countTo.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdn.jsdelivr.net/jquery.countto/0.1.0/jquery.countTo.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

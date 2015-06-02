<?php
/**
 * FlagIconCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FlagIconCssAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/components/flag-icon-css',
		'pub' => [
			'css' => [
				'css/flag-icon.min.css',
			],
		],
		'cdn' => [
			'css' => [
				'//cdn.jsdelivr.net/flag-icon-css/0.6.0/css/flag-icon.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

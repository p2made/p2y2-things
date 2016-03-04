<?php
/**
 * FlagIconCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FlagIconCssAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/flag-icon-css',
			'css' => [
				'css/flag-icon.min.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'jsdelivr#/flag-icon-css/1.2.0',
			'css' => [
				'css/flag-icon.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

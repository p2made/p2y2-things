<?php
/**
 * HolderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class HolderAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/imsky/holder',
			'js' => [
				'holder.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/holder/2.7.1',
			'js' => [
				'holder.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

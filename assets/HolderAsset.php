<?php
/**
 * HolderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class HolderAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/imsky/holder',
		'pub' => [
			'js' => [
				'holder.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/holder/2.7.1/holder.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

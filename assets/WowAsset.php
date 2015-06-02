<?php
/**
 * WowAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class WowAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/WOW/dist',
		'pub' => [
			'js' => [
				'wow.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
			],
		],
		'depends' => [
			'p2made\assets\AnimateAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

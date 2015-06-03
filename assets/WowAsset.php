<?php
/**
 * WowAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class WowAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/WOW/dist',
			'js' => [
				'wow.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/wow/1.1.2',
			'js' => [
				'wow.min.js',
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

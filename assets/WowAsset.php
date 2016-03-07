<?php
/**
 * WowAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
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
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2',
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

//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js


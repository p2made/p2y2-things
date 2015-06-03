<?php
/**
 * AnimateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class AnimateAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/animate.css-3.3.0',
			'css' => [
				'animate.min.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/animate.css/3.2.6',
			'css' => [
				'animate.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

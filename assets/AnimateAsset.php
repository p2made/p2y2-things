<?php
/**
 * AnimateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class AnimateAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/animate.css-3.3.0',
		'pub' => [
			'css' => [
				'animate.min.css',
			],
		],
		'cdn' => [
			'css' => [
				'//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

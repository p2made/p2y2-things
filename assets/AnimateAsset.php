<?php
/**
 * AnimateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class AnimateAsset extends P2AssetBundle
{
	private $libVersion = '3.5.1';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/animate.css',
			'css' => [
				'animate.min.css',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/' . $this->libVersion,
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

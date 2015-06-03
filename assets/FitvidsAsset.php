<?php
/**
 * FitvidsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FitvidsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/FitVids.js',
			'js' => [
				'jquery.fitvids.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/fitvids/1.1.0',
			'js' => [
				'jquery.fitvids.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

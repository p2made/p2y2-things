<?php
/**
 * PrettyPhotoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class PrettyPhotoAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/prettyPhoto_3.1.6',
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jsdelivr#/prettyphoto/3.1.5',
			'css' => [
				'css/prettyPhoto.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

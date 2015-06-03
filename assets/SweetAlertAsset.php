<?php
/**
 * SweetAlertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class SweetAlertAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/sweetalert-1.0.0/dist',
			'css' => [
				'sweetalert.css',
			],
			'js' => [
				'sweetalert.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/sweetalert/0.5.0',
			'css' => [
				'sweet-alert.css',
			],
			'js' => [
				'sweet-alert.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

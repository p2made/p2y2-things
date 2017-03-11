<?php
/**
 * SweetAlertAsset.php
 *
 * Yii2 asset for Sweetalert
 * http://t4t5.github.io/sweetalert/
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\SweetAlertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SweetAlertAsset',
 */

namespace p2m\assets;

class SweetAlertAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1.3';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/sweetalert-##-version-##/dist',
			'css' => [
				'sweetalert.css',
			],
			'js' => [
				'sweetalert.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/sweetalert/##-version-##',
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

<?php
/**
 * SweetAlertAsset.php
 *
 * Yii2 asset for Sweetalert
 * http://t4t5.github.io/sweetalert/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\SweetAlertAsset
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

	protected $resourceData = array(
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
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

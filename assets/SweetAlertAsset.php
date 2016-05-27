<?php
/**
 * SweetAlertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\SweetAlertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\SweetAlertAsset',
 */

namespace p2made\assets;

class SweetAlertAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.1.3';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/sweetalert/dist',
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
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

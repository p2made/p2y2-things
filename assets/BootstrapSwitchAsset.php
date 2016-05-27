<?php
/**
 * BootstrapSwitchAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\BootstrapSwitchAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\BootstrapSwitchAsset',
 */

namespace p2made\assets;

class BootstrapSwitchAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.3.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/bootstrap-switch/dist',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/##-version-##',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

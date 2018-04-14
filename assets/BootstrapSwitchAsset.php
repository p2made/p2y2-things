<?php
/**
 * BootstrapSwitchAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\BootstrapSwitchAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapSwitchAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapSwitchAsset',
 */

namespace p2m\assets;

class BootstrapSwitchAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.3.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/nostalgiaz/bootstrap-switch/dist',
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
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

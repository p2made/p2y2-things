<?php
/**
 * MetisMenuAsset.php
 *
 * Yii2 asset for metisMenu
 * http://mm.onokumus.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\MetisMenuAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MetisMenuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MetisMenuAsset',
 */

namespace p2m\assets;

class MetisMenuAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.6.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/onokumus/metismenu/dist',
			'css' => [
				'metisMenu.min.css',
			],
			'js' => [
				'metisMenu.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/metisMenu/##-version-##',
			'css' => [
				'metisMenu.min.css',
			],
			'js' => [
				'metisMenu.min.js',
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

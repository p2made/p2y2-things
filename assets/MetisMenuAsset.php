<?php
/**
 * MetisMenuAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\MetisMenuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MetisMenuAsset',
 */

namespace p2made\assets;

class MetisMenuAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.6.2';

	private $resourceData = array(
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
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

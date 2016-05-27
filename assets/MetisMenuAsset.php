<?php
/**
 * MetisMenuAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
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
	private $version = '2.5.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/metisMenu/dist',
			'css' => [
				'metisMenu.min.css',
			],
			'js' => [
				'metisMenu.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/metisMenu/' . $this->version,
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

<?php
/**
 * FlagIconCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FlagIconCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FlagIconCssAsset',
 */

namespace p2made\assets;

class FlagIconCssAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.3.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/flag-icon-css',
			'css' => [
				'css/flag-icon.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.jsdelivr.net/flag-icon-css/##-version-##',
			'css' => [
				'css/flag-icon.min.css',
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

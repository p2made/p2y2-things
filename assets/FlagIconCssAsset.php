<?php
/**
 * FlagIconCssAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\FlagIconCssAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FlagIconCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FlagIconCssAsset',
 */

namespace p2m\assets;

class FlagIconCssAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.8.0';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/components/flag-icon-css',
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

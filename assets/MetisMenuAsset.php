<?php
/**
 * MetisMenuAsset.php
 *
 * Yii2 asset for metisMenu
 * http://mm.onokumus.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MetisMenuAsset
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
	protected $packageName = 'metismenu';

	protected $packageVersion = '3.0.4';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/metismenu@##-version-##/dist',
		'sourcePath' => '@npm/metismenu/dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-rgBcEBQdBqrvZ6WDaSQ5mMTJjjvfVaE5XKzr6jZv1NpC081d/basfjfN1kgxPrhv',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-f68cq6E0KVMyT6ziVIbnLolP0WxKFI92KkQcpn+INnIlKdHtLUFxhkrYIjJzE0q1',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'metisMenu.min.css',
		],
		'js' => [
			'metisMenu.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

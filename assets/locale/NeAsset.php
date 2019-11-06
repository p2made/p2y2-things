<?php
/**
 * NeAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\NeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\NeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\NeAsset',
 */

namespace p2m\assets\locale;

class NeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-0mRPn2troQ+xF9qm9k0d0rHYDyXqBO2UHasJSL8r5OdJHF6ocZS9HG0xqWTU4IxG',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'ne.js',
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

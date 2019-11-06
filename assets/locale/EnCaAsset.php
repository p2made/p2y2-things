<?php
/**
 * EnCaAsset.php
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
 * @class \p2m\assets\locale\EnCaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EnCaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EnCaAsset',
 */

namespace p2m\assets\locale;

class EnCaAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-FKi8O9M5fZ388gxMzEIs8Ask9jlp5AIYBvRf+UNBLebBAyQCc21CSaxK+Sdk1hEE',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'en-ca.js',
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

<?php
/**
 * ArMaAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\ArMaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArMaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArMaAsset',
 */

namespace p2m\assets\locale;

class ArMaAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-LWJ58K8z85sEUzFpnRNjpv+89KIvqbooo1XAiCSwz7ePrrhUs1gToJV21ySemhl3',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'ar-ma.js',
		],
		'depends' => [
			'p2m\assets\MomentAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

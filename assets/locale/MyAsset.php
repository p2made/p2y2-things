<?php
/**
 * MyAsset.php
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
 * @class \p2m\assets\locale\MyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MyAsset',
 */

namespace p2m\assets\locale;

class MyAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-PqaKWl9eZCIiPA/uazWZ9OnrePRlEcpTWqd38dwrp5Xfyn/dWB+U7icuHbp5wptM',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'my.js',
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

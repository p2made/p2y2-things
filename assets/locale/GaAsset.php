<?php
/**
 * GaAsset.php
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
 * @class \p2m\assets\locale\GaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\GaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\GaAsset',
 */

namespace p2m\assets\locale;

class GaAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-8seBuvt8QmQpGcqTrua6AzpxHxbNimkPioSdwTV9Ap3ovyhfPZfbEHuv8b6HICHD',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'ga.js',
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

<?php
/**
 * TzlAsset.php
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
 * @class \p2m\assets\locale\TzlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TzlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TzlAsset',
 */

namespace p2m\assets\locale;

class TzlAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-DeBmDN2LZHLbfIG0MF8yGygL6P2qQedLXvFMmLyKjzOK4pAnGisArvWfLW7vVM7y',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'tzl.js',
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

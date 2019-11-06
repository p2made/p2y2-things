<?php
/**
 * DeAtAsset.php
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
 * @class \p2m\assets\locale\DeAtAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\DeAtAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\DeAtAsset',
 */

namespace p2m\assets\locale;

class DeAtAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-E2aWn3SvWVodBfQ5nm4EBSx5Be4AB39QQnlsFJIYIT8TFVYp19mrsDqnR24Fc1sb',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'de-at.js',
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

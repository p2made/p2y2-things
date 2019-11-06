<?php
/**
 * TrAsset.php
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
 * @class \p2m\assets\locale\TrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TrAsset',
 */

namespace p2m\assets\locale;

class TrAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-GT36YgQKCTcOn72Z84PoR+QM2VA5fPU5TTrHWHwUfGt30EZJEiNM1aa8sazYVk1e',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'tr.js',
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

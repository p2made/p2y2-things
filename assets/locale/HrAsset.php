<?php
/**
 * HrAsset.php
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
 * @class \p2m\assets\locale\HrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\HrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\HrAsset',
 */

namespace p2m\assets\locale;

class HrAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-gX4beohbTeFBBE7ASxO8IKHkVczMB+ahl6rPhsbXVybHRkbCDcSOFVIBr2Ws5xdB',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'hr.js',
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

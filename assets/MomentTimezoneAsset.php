<?php
/**
 * MomentTimezoneAsset.php
 *
 * Yii2 asset for moment-timezone
 * https://momentjs.com/timezone/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MomentTimezoneAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneAsset',
 */

namespace p2m\assets;

class MomentTimezoneAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment-timezone';

	protected $packageVersion = '0.5.27';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment-timezone@##-version-##/builds',
		'sourcePath' => '@npm/moment-timezone/builds',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-OC5uTFpJypknuDgqnWMjoesuxf1bZ9ZYJJ3mjFzFUTkds8ahFlVThBIBVvMFv8y4',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'moment-timezone.min.js',
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

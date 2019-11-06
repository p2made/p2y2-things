<?php
/**
 * CvAsset.php
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
 * @class \p2m\assets\locale\CvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\CvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\CvAsset',
 */

namespace p2m\assets\locale;

class CvAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-rUx/V9djWGfuxqDt2OyXfOeELw0fVRV+JEXjTbGVhu7Y3pYhd7WUHlmKj6zzAEHO',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'cv.js',
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

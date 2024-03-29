<?php
/**
 * SdAsset.php
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
 * @class \p2m\assets\locale\SdAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SdAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SdAsset',
 */

namespace p2m\assets\locale;

class SdAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-Yfz1IFdSphhgSex3e++7daJ49YLXPXMCI7vyyvCx1bzVEZqpHg7L+PwiDYZ1iMTE',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'sd.js',
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

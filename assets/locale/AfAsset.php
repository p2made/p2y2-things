<?php
/**
 * AfAsset.php
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
 * @class \p2m\assets\locale\AfAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\AfAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\AfAsset',
 */

namespace p2m\assets\locale;

class AfAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-6jKHY1q/oi04IKp1vWIW1AgbyJG7VYgiWqIcejA3rvnuDzwjvoBdXXURxw+9qyq/',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'af.js',
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

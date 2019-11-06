<?php
/**
 * MagnificPopupAsset.php
 *
 * Yii2 asset for Magnific Popup
 * https://dimsemenov.com/plugins/magnific-popup/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MagnificPopupAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MagnificPopupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MagnificPopupAsset',
 */

namespace p2m\assets;

class MagnificPopupAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'magnific-popup';

	protected $packageVersion = '1.1.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/magnific-popup@##-version-##/dist',
		'sourcePath' => '@npm/magnific-popup/dist',
		'static' => [
			'css' => [
				'magnific-popup.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-FYQAfABe21FtIXd6+luYjhBcJomlPYbofGGps6AyyOhObtv/Spp69Ujm04FbHa9W',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-fexNtx3nPE3sjIQuGk8G2X8X/aSEBVMC58R839hkgsY/Xjhvkm7m2otGhwrdESWj',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'magnific-popup.css',
		],
		'js' => [
			'jquery.magnific-popup.min.js',
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

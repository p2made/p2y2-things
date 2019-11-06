<?php
/**
 * ImagesLoadedAsset.php
 *
 * Yii2 asset for imagesLoaded
 * https://imagesloaded.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\ImagesLoadedAsset
 */

/**
 * Load this asset with...
 * p2m\assets\ImagesLoadedAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ImagesLoadedAsset',
 */

namespace p2m\assets;

class ImagesLoadedAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'imagesloaded';

	protected $packageVersion = '4.1.4';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/imagesloaded@##-version-##',
		'sourcePath' => '@npm/imagesloaded',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-YnGSHPPWEUDKMHFPOVmNP7Xyfwx5G0CHet6IoNgiX6CbFZS8gCeIfEgB1MgPwjdI',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'imagesloaded.pkgd.min.js',
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

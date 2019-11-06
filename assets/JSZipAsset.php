<?php
/**
 * JSZipAsset.php
 *
 * Yii2 asset for jszip
 * https://github.com/Stuk/jszip
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\JSZipAsset
 */

/**
 * Load this asset with...
 * p2m\assets\JSZipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JSZipAsset',
 */

namespace p2m\assets;

class JSZipAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'jszip';

	protected $packageVersion = '3.2.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/jszip@##-version-##/dist',
		'sourcePath' => '@npm/jszip/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-kdlp/eaq4ocpSzG9lDxW0fS3Ed5zL6eVEqOG9E/cDKR2XcXTiXQkRR4WAuQ+6Bt1',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'jszip.min.js',
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

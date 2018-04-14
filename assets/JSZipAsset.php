<?php
/**
 * JSZipAsset.php
 *
 * Yii2 asset for JSZip
 * http://stuk.github.io/jszip/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JSZipAsset
 * @license MIT
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
	protected $version = '3.1.3';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/stuk/jszip/dist',
			'js' => [
				'jszip.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/jszip/##-version-##',
			'js' => [
				'jszip.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

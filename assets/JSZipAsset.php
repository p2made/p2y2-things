<?php
/**
 * JSZipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
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

	private $resourceData = array(
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
			'p2m\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

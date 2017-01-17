<?php
/**
 * JSZipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\JSZipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\JSZipAsset',
 */

namespace p2made\assets;

class JSZipAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.5.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/jszip/dist',
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
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * Lightbox2Asset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\Lightbox2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\Lightbox2Asset',
 */

namespace p2made\assets;

class Lightbox2Asset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.8.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/lightbox2/dist',
			'css' => [
				'css/lightbox.min.css',
			],
			'js' => [
				'js/lightbox.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/lightbox2/##-version-##',
			'css' => [
				'css/lightbox.min.css',
			],
			'js' => [
				'js/lightbox.min.js',
			],
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/*
	@vendor/bower/lightbox2/dist/css/lightbox.min.css

	@vendor/bower/lightbox2/dist/images/close.png
	@vendor/bower/lightbox2/dist/images/loading.gif
	@vendor/bower/lightbox2/dist/images/next.png
	@vendor/bower/lightbox2/dist/images/prev.png

	@vendor/bower/lightbox2/dist/js/lightbox-plus-jquery.min.js
	@vendor/bower/lightbox2/dist/js/lightbox.min.js


	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css

	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/close.png
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/loading.gif
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/next.png
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/prev.png

	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js
 */

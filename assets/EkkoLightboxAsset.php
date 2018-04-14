<?php
/**
 * EkkoLightboxAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\EkkoLightboxAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\EkkoLightboxAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\EkkoLightboxAsset',
 */

namespace p2m\assets;

class EkkoLightboxAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '4.0.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/drmonty/ekko-lightbox',
			'css' => [
				'css/ekko-lightbox.min.css',
			],
			'js' => [
				'js/ekko-lightbox.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/##-version-##',
			'css' => [
				'ekko-lightbox.min.css',
			],
			'js' => [
				'ekko-lightbox.min.js',
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

/*
	@vendor/bower/ekko-lightbox/dist/ekko-lightbox.min.css
	@vendor/bower/ekko-lightbox/dist/ekko-lightbox.min.js

	//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css
	//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js
 */

<?php
/**
 * EkkoLightboxAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class EkkoLightboxAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/ekko-lightbox/dist',
			'css' => [
				'ekko-lightbox.min.css',
			],
			'js' => [
				'ekko-lightbox.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1',
			'css' => [
				'ekko-lightbox.min.css',
			],
			'js' => [
				'ekko-lightbox.min.js',
			],
		],
		'depends' => [
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

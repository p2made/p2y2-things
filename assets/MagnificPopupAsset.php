<?php
/**
 * MagnificPopupAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\MagnificPopupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MagnificPopupAsset',
 */

namespace p2made\assets; /* edit this if using elsewhere */

class MagnificPopupAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.1.0';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/dimsemenov/magnific-popup/dist',
			'css' => [
				'magnific-popup.min.css',
			],
			'js' => [
				'jquery.magnific-popup.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/##-version-##',
			'css' => [
				'magnific-popup.min.css',
			],
			'js' => [
				'jquery.magnific-popup.min.js',
			],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

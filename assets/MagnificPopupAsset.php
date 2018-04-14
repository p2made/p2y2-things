<?php
/**
 * MagnificPopupAsset.php
 *
 * Yii2 asset for Magnific Popup
 * http://dimsemenov.com/plugins/magnific-popup/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\MagnificPopupAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MagnificPopupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MagnificPopupAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class MagnificPopupAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1.0';

	protected $resourceData = array(
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
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

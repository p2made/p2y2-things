<?php
/**
 * JqueryEasingAsset.php
 *
 * Yii2 asset for jQuery Easing
 * http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JqueryEasingAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryEasingAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryEasingAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class JqueryEasingAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.4.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery.easing-##-version-##',
			'css' => [],
			'js' => [
				'jquery.easing.min.js',
				'jquery.easing.compatibility.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/##-version-##',
			'css' => [],
			'js' => [
				'jquery.easing.min.js',
				'jquery.easing.compatibility.min.js',
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

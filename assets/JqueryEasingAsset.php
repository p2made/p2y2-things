<?php
/**
 * JqueryEasingAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\JqueryEasingAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\JqueryEasingAsset',
 */

namespace p2made\assets; /* edit this if using elsewhere */

class JqueryEasingAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.4.1';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@bower/jquery-easing-original',
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
			'p2made\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

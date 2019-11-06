<?php
/**
 * JqueryEasingAsset.php
 *
 * Yii2 asset for jQuery Easing
 * https://github.com/gdsmith/jquery.easing
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\JqueryEasingAsset
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryEasingAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryEasingAsset',
 */

namespace p2m\assets;

class JqueryEasingAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'jquery.easing';

	protected $packageVersion = '1.4.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/jquery.easing@##-version-##',
		'sourcePath' => '@npm/jquery.easing',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-leGYpHE9Tc4N9OwRd98xg6YFpB9shlc/RkilpFi0ljr3QD4tFoFptZvgnnzzwG4Q',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'jquery.easing.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

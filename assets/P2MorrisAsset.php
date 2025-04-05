<?php
/**
 * P2MorrisAsset.php
 *
 * Yii2 asset for morris.js
 * https://github.com/morrisjs/morris.js
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2MorrisAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2MorrisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2MorrisAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MorrisAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/morris.js@0.5.0';

	public $css = [
		'morris.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-cyd51W1b4XEYt2m6WcLXHppQELcHUDcYpefedV3Oy0A=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'morris.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-0rg2VtfJo3VUij/UY9X0HJP7NET6tgAY98aMOfwP0P8=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

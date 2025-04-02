<?php
/**
 * P2FlickityAsset.php
 *
 * Yii2 asset for Flickity
 * https://flickity.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FlickityAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FlickityAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FlickityAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FlickityAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/flickity@3.0.0';

	public $css = [
		'css/flickity.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-AJ83DrJ3CG1xBJoD/71u5Cryw+aTOMY9SB5PmYs9uFK+wYoq/dDJRvc8v9xlbOaj',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'dist/flickity.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-K8XfylopijCrS7K3AJlF3A1fUNnM8a9m0co7Vl6Qkkw=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}


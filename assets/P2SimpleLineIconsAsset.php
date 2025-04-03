<?php
/**
 * P2SimpleLineIconsAsset.php
 *
 * Yii2 asset for simple-line-icons
 * https://thesabbir.github.io/simple-line-icons/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2SimpleLineIconsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2SimpleLineIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2SimpleLineIconsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SimpleLineIconsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/simple-line-icons@2.5.5';

	public $css = [
		'css/simple-line-icons.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-8c2s+xHTJhSE2qGizyA0/jl02JgszgEB4ytP5T0YEAQ=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'scripts/build.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-tEUwQsGeBNwL+/vm1AlBphkmALcOJSP4zUyR32A62Ak=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

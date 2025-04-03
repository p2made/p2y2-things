<?php
/**
 * P2MathJsAsset.php
 *
 * Yii2 asset for Math.js
 * https://mathjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2MathJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2MathJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2MathJsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MathJsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/mathjs@14.4.0/lib/browser';

	public $js = [
		'math.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-HoJxYiaGa74zfMDD5InOIvyAvf9v9EEhr8GaZbSkROw=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

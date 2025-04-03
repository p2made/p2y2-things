<?php
/**
 * P2ScrollRevealAsset.php
 *
 * Yii2 asset for ScrollReveal
 * https://scrollrevealjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2ScrollRevealAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2ScrollRevealAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2ScrollRevealAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2ScrollRevealAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/scrollreveal@4.0.9/dist';

	public $js = [
		'scrollreveal.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-YHdamLXLIBEicRscu4gge3gdzJSWGvvWggYMiCYwCg0=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

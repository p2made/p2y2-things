<?php
/**
 * P2AnimateAsset.php
 *
 * Yii2 asset for Animate.css
 * https://animate.style/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2AnimateAsset
 */

/**
 * Load this asset with...
p2m\assets\P2AnimateAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2AnimateAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2AnimateAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/animate.css@4.1.1';

	public $css = [
		'animate.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-X7rrn44l1+AUO65h1LGALBbOc5C5bOstSYsNlv9MhT8=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

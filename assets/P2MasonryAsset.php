<?php
/**
 * P2MasonryAsset.php
 *
 * Yii2 asset for Masonry
 * https://masonry.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2MasonryAsset
 */

/**
 * Load this asset with...
p2m\assets\P2MasonryAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2MasonryAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MasonryAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist';

	public $js = [
		'masonry.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-Nn1q/fx0H7SNLZMQ5Hw5JLaTRZp0yILA/FRexe19VdI=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

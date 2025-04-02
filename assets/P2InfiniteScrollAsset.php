<?php
/**
 * P2InfiniteScrollAsset.php
 *
 * Yii2 asset for Infinite Scroll
 * https://infinite-scroll.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2InfiniteScrollAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2InfiniteScrollAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2InfiniteScrollAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2InfiniteScrollAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/infinite-scroll@5.0.0/dist';

	public $js = [
		'infinite-scroll.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-tOCaIctmk4a/Rfaq6N7+YfBCs9N+SZ00U1XFwOnZzRk=',
		'crossorigin' => 'anonymous',
	];
}

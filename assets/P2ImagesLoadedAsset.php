<?php
/**
 * P2ImagesLoadedAsset.php
 *
 * Yii2 asset for imagesLoaded
 * https://imagesloaded.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2ImagesLoadedAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2ImagesLoadedAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2ImagesLoadedAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2ImagesLoadedAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/imagesloaded@5.0.0';

	public $js = [
		'imagesloaded.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-htrLFfZJ6v5udOG+3kNLINIKh2gvoKqwEhHYfTTMICc=',
		'crossorigin' => 'anonymous',
	];
}

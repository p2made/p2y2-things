<?php
/**
 * P2Bs5Lightbox.php
 *
 * Yii2 asset for bs5-lightbox
 * https://github.com/trvswgnr/bs5-lightbox/
 * Replaces previous ekko-lightbox asset
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2Bs5Lightbox
 */

/**
 * Load this asset with...
 * p2m\assets\P2Bs5Lightbox::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2Bs5Lightbox',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2Bs5Lightbox extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bs5-lightbox@1.8.5/dist';

	public $js = [
		'index.bundle.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-wBVT6m5bc14zQfKS8VaFxRBxmovsFNGP3mAxmll9p7Y=',
		'crossorigin' => 'anonymous',
	];
}

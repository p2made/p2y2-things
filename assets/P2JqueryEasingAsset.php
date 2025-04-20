<?php
/**
 * P2JqueryEasingAsset.php
 *
 * Yii2 asset for jQuery Easing
 * https://github.com/gdsmith/jquery.easing
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2JqueryEasingAsset
 */

/**
 * Load this asset with...
p2m\assets\P2JqueryEasingAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2JqueryEasingAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2JqueryEasingAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/jquery.easing@1.4.1';

	public $js = [
		'jquery.easing.min.js',
	];

	public $cssOptions = [
		'integrity' => 'sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

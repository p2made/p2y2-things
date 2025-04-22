<?php
/**
 * P2EmojiCssAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2EmojiCssAsset
 */

/**
 * Load this asset with...
p2m\assets\P2EmojiCssAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2EmojiCssAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2EmojiCssAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/emoji.css@1.0.6';

	public $css = [
		'dist/emoji.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-m/P5rbeZ/DVpTZJhhcDHL6Ne2gmbGZ5Sv+d4YSdKDz4=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'lib/index.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-KCpm0bsMRkkRAsEnfcrRMk+6XQ62lsKHENejWliLcms=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

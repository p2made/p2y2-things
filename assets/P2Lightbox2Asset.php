<?php
/**
 * Lightbox2Asset.php
 *
 * Yii2 asset for LIGHTBOX
 * https://lokeshdhakar.com/projects/lightbox2/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\Lightbox2Asset
 */

/**
 * Load this asset with...
 * p2m\assets\Lightbox2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\Lightbox2Asset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class Lightbox2Asset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/lightbox2@2.11.5/dist';

	public $css = [
		'css/lightbox.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-uypRbsAiJcFInM/ndyI/JHpzNe6DtUNXaWEUWEPfMGo=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/lightbox.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-A6jI5V9s1JznkWwsBaRK8kSeXLgIqQfxfnvdDOZEURY=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

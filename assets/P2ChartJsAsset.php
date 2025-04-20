<?php
/**
 * P2ChartJsAsset.php
 *
 * Yii2 asset for Chart.js
 * https://www.chartjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2ChartJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2ChartJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2ChartJsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2ChartJsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/chart.js@2.9.4';

	public $css = [
		'dist/Chart.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'dist/Chart.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-t9UJPrESBeG2ojKTIcFLPGF7nHi2vEc7f5A2KpH/UBU=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

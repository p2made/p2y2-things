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

	public $baseUrl = '//cdn.jsdelivr.net/npm/chart.js@4.4.8/dist';

	public $js = [
		'chart.umd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-T/4KgSWuZEPozpPz7rnnp/5lDSnpY1VPJCojf1S81uTHS1E38qgLfMgVsAeRCWc4',
		'crossorigin' => 'anonymous',
	];
}

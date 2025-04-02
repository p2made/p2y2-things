<?php
/**
 * P2FullCalendarScrollgridAsset.php
 *
 * Yii2 asset for FullCalendar/scrollgrid
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarScrollgridAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarScrollgridAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarScrollgridAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarScrollgridAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/scrollgrid@6.1.15';

	public $css = [
		'index.global.min.js',
	];

	public $cssOptions = [
		'integrity' => 'sha256-qImY1NtoRpY9VgHM7ozVgvtLalbSu+Y3Rw96jHzfPdo=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'_source_min_js_',
	];

	public $jsOptions = [
		'integrity' => '_hash_',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'_dependancy_',
	];
}

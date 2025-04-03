<?php
/**
 * P2FullCalendarGoogleCalendarAsset.php
 *
 * Yii2 asset for FullCalendar/google-calendar
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarGoogleCalendarAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarGoogleCalendarAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarGoogleCalendarAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarGoogleCalendarAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-Ts9kcB78f6SoaBwxP0P4c6I6lJ7rtGCsKQiPS3ykVGQ=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarBootstrap5Asset',
	];
}

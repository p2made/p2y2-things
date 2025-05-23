<?php
/**
 * P2FullCalendarMomentTimezoneAsset.php
 *
 * Yii2 asset for FullCalendar/moment-timezone
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\fullcalendar\P2FullCalendarMomentTimezoneAsset
 */

/**
 * Load this asset with...
p2m\assets\fullcalendar\P2FullCalendarMomentTimezoneAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\fullcalendar\P2FullCalendarMomentTimezoneAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarMomentTimezoneAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/moment-timezone@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-GBT21tB6Q3amNNQ4DiwZHj9KtNjquAXMELgIMdx8NvA=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\fullcalendar\P2FullCalendarBootstrap5Asset',
	];
}

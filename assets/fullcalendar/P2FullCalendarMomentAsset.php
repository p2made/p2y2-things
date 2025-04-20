<?php
/**
 * P2FullCalendarMomentAsset.php
 *
 * Yii2 asset for FullCalendar/moment
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\fullcalendar\P2FullCalendarMomentAsset
 */

/**
 * Load this asset with...
p2m\assets\fullcalendar\P2FullCalendarMomentAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\fullcalendar\P2FullCalendarMomentAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarMomentAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/moment@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-acE4J0fvmgX3F2XJaXkRNZBNau8cXLPgGDE/CjOIbTE=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\fullcalendar\P2FullCalendarBootstrap5Asset',
	];
}

<?php
/**
 * P2FullCalendarMultimonthAsset.php
 *
 * Yii2 asset for FullCalendar/multimonth
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarMultimonthAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarMultimonthAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarMultimonthAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarMultimonthAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/multimonth@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-boQ4dXy72UqTdIKhsa5JKbNCpypEFuinf3XmfzQS76k=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarAsset',
	];
}

<?php
/**
 * P2FullCalendarIcalAsset.php
 *
 * Yii2 asset for FullCalendar/icalendar
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarIcalAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarIcalAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarIcalAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarIcalAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/icalendar@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-4zHPHslCgpks0gXVzHuFcF3aL1y674HH8L9s3vQiJK4=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarAsset',
	];
}

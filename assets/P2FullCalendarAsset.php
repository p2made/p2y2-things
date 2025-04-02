<?php
/**
 * P2FullCalendarAsset.php
 *
 * Yii2 asset for FullCalendar
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/fullcalendar@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-ZztCtsADLKbUFK/X6nOYnJr0eelmV2X3dhLDB/JK6fM=',
		'crossorigin' => 'anonymous',
	];
}

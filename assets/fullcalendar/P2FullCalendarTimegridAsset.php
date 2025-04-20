<?php
/**
 * P2FullCalendarTimegridAsset.php
 *
 * Yii2 asset for FullCalendar/timegrid
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\fullcalendar\P2FullCalendarTimegridAsset
 */

/**
 * Load this asset with...
p2m\assets\fullcalendar\P2FullCalendarTimegridAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\fullcalendar\P2FullCalendarTimegridAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarTimegridAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-sKqBX1fhsoZdSNx2jRY6ac2yQDxoweVeAKMJOrOyoA0=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\fullcalendar\P2FullCalendarBootstrap5Asset',
	];
}

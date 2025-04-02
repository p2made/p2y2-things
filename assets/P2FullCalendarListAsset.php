<?php
/**
 * P2FullCalendarListAsset.php
 *
 * Yii2 asset for FullCalendar/list
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarListAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarListAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarListAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarListAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-1yt69NyrKZ8ZGeVEukfI0tmPN2RpncLCAngB9eHEH1U=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarAsset',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}


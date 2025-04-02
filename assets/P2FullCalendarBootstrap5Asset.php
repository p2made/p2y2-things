<?php
/**
 * P2FullCalendarBootstrap5Asset.php
 *
 * Yii2 asset for FullCalendar/Bootsrap5
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarBootstrap5Asset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarBootstrap5Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarBootstrap5Asset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarBootstrap5Asset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-TslkUnYKZuqQj4Ueu1WQesikFvl2DADWslCx3EfBHZM=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2FullCalendarBaseAsset',
	];
}

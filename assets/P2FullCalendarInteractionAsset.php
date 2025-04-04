<?php
/**
 * P2FullCalendarInteractionAsset.php
 *
 * Yii2 asset for FullCalendar/interaction
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarInteractionAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarInteractionAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarInteractionAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarInteractionAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-HQE1FmtLSmq/8Cjkap8nrv5iWCwYp6as2eC764W4lcs=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarBootstrap5Asset',
	];
}

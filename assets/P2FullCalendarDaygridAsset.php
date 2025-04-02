<?php
/**
 * P2FullCalendarDaygridAsset.php
 *
 * Yii2 asset for FullCalendar/daygrid
 * https://fullcalendar.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FullCalendarDaygridAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FullCalendarDaygridAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FullCalendarDaygridAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FullCalendarDaygridAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15';

	public $js = [
		'index.global.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-bxphyBuzK0CFtRG513b0dgkEVH/e0shTcEHdJWcjjf0=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2FullCalendarAsset',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2DataTablesButtonsBaseAsset.php
 *
 * Yii2 base asset for DataTables/Buttons
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2DataTablesButtonsBaseAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2DataTablesButtonsBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2DataTablesButtonsBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2DataTablesButtonsBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/buttons/3.2.2';

	public $css = [
		'css/buttons.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-DJhypeLg79qWALC844KORuTtaJcH45J+36wNgzj4d1Kv1vt2PtRuV2eVmdkVmf/U',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.buttons.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-DmaAfo+/+UjRKHPidNNswlNqd9ybuE6yx9zKHyMY+vYy9SZhQEu4nauMVgwSx4Z/',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

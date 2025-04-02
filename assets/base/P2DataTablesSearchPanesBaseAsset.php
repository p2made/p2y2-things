<?php
/**
 * P2DataTablesSearchPanesBaseAsset.php
 *
 * Yii2 base asset for DataTables/searchPanes
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2DataTablesSearchPanesBaseAsset
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
 * p2m\assets\base\P2DataTablesSearchPanesBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2DataTablesSearchPanesBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2DataTablesSearchPanesBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/searchpanes/2.3.3';

	public $css = [
		'css/searchPanes.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-kCfL8qIiEo0PgaMnJvqVlxd797OkgozSx5pxn/uCJOY5d99ovqdqU545WcRTbo+m',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.searchPanes.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-sUuBv4oZPlATC6Uuta8hZSx3oiTAet53rbLe+vHVcTbupVepb13xKgdB4jYsm/oh',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

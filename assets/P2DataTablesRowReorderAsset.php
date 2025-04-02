<?php
/**
 * P2DataTablesRowReorderAsset.php
 *
 * Yii2 asset for DataTables/rowReorder
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesRowReorderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesRowReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesRowReorderAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesRowReorderAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/rowreorder/1.5.0';

	public $css = [
		'css/rowReorder.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-iJaY6tDwZfknqxE3hfWpJ/eOh/jUwudQWqFm251uZJWXZcpqPx3Z/BG65Y4r7us0',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.rowReorder.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-xiwUQRasBcDH/VWFi1JXyBwDItoHATDc19Mt/Vz+3Ltg7GsOm6TBoUPfIw5LA1ck',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

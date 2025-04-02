<?php
/**
 * P2DataTablesFixedColumnsAsset.php
 *
 * Yii2 asset for DataTables/fixedColumns
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesFixedColumnsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesFixedColumnsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesFixedColumnsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/fixedcolumns/5.0.4';

	public $css = [
		'css/fixedColumns.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-StUfKBL80ZWBFxSXA89vIUJ85yyOsUA5Gi6oLYEPaJd8WPvS1D9jIqLQDLWAO6jc',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.fixedColumns.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-pTT0DCmQdJKH1Vz2e0adpu+1Tp4tiIYm+vF6e+b+YAywojOEf3TR2WyIGdICT5Gy',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

<?php
/**
 * P2DataTablesStateRestoreBaseAsset.php
 *
 * Yii2 base asset for DataTables/stateRestore
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2DataTablesStateRestoreBaseAsset
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
 * p2m\assets\base\P2DataTablesStateRestoreBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2DataTablesStateRestoreBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2DataTablesStateRestoreBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/staterestore/1.4.1';

	public $css = [
		'css/stateRestore.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-SqgotlSmX9lWyZrQE1T8N4+Xmy+PcmUsHah7crBbZPPAf8Ok6YFpbR/clkZIOpZ+',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.stateRestore.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-AZkdUqVkvJR8n1nrXmfnf+JsdQ3RZVZt3PDx0TjgEmtVOPoco10soHHa6to3PxCk',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

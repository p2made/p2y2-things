<?php
/**
 * P2DataTablesRowGroupAsset.php
 *
 * Yii2 asset for DataTables/rowGroup
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesRowGroupAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesRowGroupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesRowGroupAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesRowGroupAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/rowgroup/1.5.1';

	public $css = [
		'css/rowGroup.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-Rj6fkZegbvuzZ6XuR6+R7a5orEwiiWM1rlq7854UVoNPRoYhPH9hOzCYeIppf4qw',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.rowGroup.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-T3BVwaNY2bpNuIPnMFf2CxjIZZAkCXv6+GxwAs50oId58u5/TIAvrY1eR3+aAHjH',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

<?php
/**
 * P2DataTablesBootstrap5Asset.php
 *
 * Yii2 base asset for DataTables/Bootstrap5
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesBootstrap5Asset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesBootstrap5Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesBootstrap5Asset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesBootstrap5Asset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/2.2.2';

	public $css = [
		'css/dataTables.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-BDXgFqzL/EpYeT/J5XTrxR+qDB4ft42notjpwhZDEjDIzutqmXeImvKS3YPH/WJX',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-G85lmdZCo2WkHaZ8U1ZceHekzKcg37sFrs4St2+u/r2UtfvSDQmQrkMsEx4Cgv/W',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesBaseAsset',
	];
}

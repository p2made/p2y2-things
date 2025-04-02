<?php
/**
 * P2DataTablesColReorderAsset.php
 *
 * Yii2 asset for DataTables/colReorder
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesColReorderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesColReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesColReorderAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesColReorderAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/colreorder/2.0.4';

	public $css = [
		'css/colReorder.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-GbOIUvtTgiwI6/J1RPbHEigVcEHKQ5rwIoEmihz+slAsiIn6KTkzPQbdMneBryUS',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.colReorder.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-UALJq0w7FczxM5WFRHoeQKfzEjTBDBg4SVSsEUeHok1S7638VCQi4HQVi9G0JoE2',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

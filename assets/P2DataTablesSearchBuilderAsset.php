<?php
/**
 * P2DataTablesSearchBuilderAsset.php
 *
 * Yii2 asset for DataTables/searchBuilder
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesSearchBuilderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesSearchBuilderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesSearchBuilderAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesSearchBuilderAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/searchbuilder/1.8.2';

	public $js = [
		'js/searchBuilder.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-9eFZ0WfV3F1WYwtSPlJAQyeKYNmJBE5j1YPuzvkMJM+iQFp2AhwUEBDu/TogLL5c',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}


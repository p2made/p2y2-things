<?php
/**
 * P2DataTablesKeyTableAsset.php
 *
 * Yii2 asset for DataTables/keyTable
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesKeyTableAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesKeyTableAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesKeyTableAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesKeyTableAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/keytable/2.12.1';

	public $css = [
		'css/keyTable.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-9rz3zS4qleWOOeZmPIp29dWk7GYvmx2zNp0FlRKbtHHY0T8fHci0uuiTB9SwHYbv',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.keyTable.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-NpM9cy4W0hbpF01CF3uXWZjVV0Q3qBPDaQlLcm92tD/4zpTXoj716Q1VkXFb7/t7',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

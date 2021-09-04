<?php
/**
 * DataTablesFixedColumnsAsset.php
 *
 * Yii2 asset for DataTables
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\DataTablesFixedColumnsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesFixedColumnsAsset',
 */

namespace p2m\assets;

class DataTablesFixedColumnsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-fixedcolumns-bs4';

	protected $packageVersion = '3.3.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/fixedcolumns/##-version-##',
		'sourcePath' => '@npm/datatables.net-fixedcolumns-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-sp/ugs3gRXj2G8/7yAMKuDyewdaPI1a9NLyTw32OhgRIQ+TPpNWWeujzp5Bd9+AX',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.fixedColumns.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-JkmaYv8NrrEw+6ZrTKOr88WWrQh3qrrxxWRwy02Xf8zbLM7+K6rS2YoVyAMZ1pfV',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/fixedColumns.bootstrap4.min.css',
		],
		'js' => [
			'js/fixedColumns.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\DataTablesAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

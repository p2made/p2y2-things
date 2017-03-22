<?php
/**
 * DataTablesFixedColumnsAsset.php
 *
 * Yii2 asset for DataTables FixedColumns
 * https://github.com/DataTables/FixedColumns
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFixedColumnsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFixedColumnsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.2.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/FixedColumns-##-version-##',
			'css' => [
				'css/fixedColumns.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedColumns.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedcolumns/##-version-##',
			'css' => [
				'css/fixedColumns.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedColumns.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

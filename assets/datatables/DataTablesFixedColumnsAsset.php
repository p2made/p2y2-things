<?php
/**
 * DataTablesFixedColumnsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesFixedColumnsAsset',
 */

namespace p2made\assets\datatables;

class DataTablesFixedColumnsAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.2.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-fixedcolumns',
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
			'p2made\assets\JqueryAsset',
			'p2made\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

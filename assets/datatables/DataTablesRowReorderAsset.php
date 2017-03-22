<?php
/**
 * DataTablesRowReorderAsset.php
 *
 * Yii2 asset for DataTables RowReorder
 * https://github.com/DataTables/RowReorder
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesRowReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesRowReorderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesRowReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/RowReorder-##-version-##',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowreorder/##-version-##',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
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

<?php
/**
 * DataTablesKeyTableAsset.php
 *
 * Yii2 asset for DataTables KeyTable
 * https://github.com/DataTables/KeyTable
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesKeyTableAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesKeyTableAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesKeyTableAsset',
 */

namespace p2m\assets\datatables;

class DataTablesKeyTableAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables/KeyTable-##-version-##',
			'css' => [
				'css/keyTable.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/keytable/##-version-##',
			'css' => [
				'css/keyTable.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

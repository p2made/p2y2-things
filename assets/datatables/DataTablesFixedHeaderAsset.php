<?php
/**
 * DataTablesFixedHeaderAsset.php
 *
 * Yii2 asset for DataTables FixedHeader
 * https://github.com/DataTables/FixedHeader
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesFixedHeaderAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFixedHeaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFixedHeaderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFixedHeaderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.1.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables/FixedHeader-##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedheader/##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
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

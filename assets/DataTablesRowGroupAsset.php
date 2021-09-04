<?php
/**
 * DataTablesRowGroupAsset.php
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
 * @class \p2m\assets\DataTablesRowGroupAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesRowGroupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesRowGroupAsset',
 */

namespace p2m\assets;

class DataTablesRowGroupAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-rowgroup-bs4';

	protected $packageVersion = '1.1.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/rowgroup/##-version-##',
		'sourcePath' => '@npm/datatables.net-rowgroup-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-sREga0SY0aJ5RceXnqhT2UZXVIHrg0DxCvj0RzvTw4hcB9oAz/yTn4dAuKZzicIA',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.rowGroup.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-VA+h1LLWpwic8joSPD5SG2NFkHO6JF3V9cZQRHJ5yitdUsP/NqC3SqIk3lTU1frX',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/rowGroup.bootstrap4.min.css',
		],
		'js' => [
			'js/rowGroup.bootstrap4.min.js',
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

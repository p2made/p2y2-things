<?php
/**
 * DataTablesColReorderAsset.php
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
 * @class \p2m\assets\DataTablesColReorderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesColReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesColReorderAsset',
 */

namespace p2m\assets;

class DataTablesColReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-colreorder-bs4';

	protected $packageVersion = '1.5.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/colreorder/##-version-##',
		'sourcePath' => '@npm/datatables.net-colreorder-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-RZygVb1fZHVXuu7ppEDHdp39XsL8YoCh4VjdoKiWkjwwfOXVpxJhSsUfMKKmRzam',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-kuXVgEY8Yq1MrbY69LGDBih9hBoQXNzIEoeC4H/JgDpf1Z48Snug7hTLX9t62NgG',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/colReorder.bootstrap4.min.css',
		],
		'js' => [
			'js/colReorder.bootstrap4.min.js',
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

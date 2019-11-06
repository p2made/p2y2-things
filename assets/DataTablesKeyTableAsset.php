<?php
/**
 * DataTablesKeyTableAsset.php
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
 * @class \p2m\assets\DataTablesKeyTableAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesKeyTableAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesKeyTableAsset',
 */

namespace p2m\assets;

class DataTablesKeyTableAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-keytable-bs4';

	protected $packageVersion = '2.5.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/keytable/##-version-##',
		'sourcePath' => '@npm/datatables.net-keytable-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-yJbK2SgMp7dq69V9ykO2BN4oLSTAdtCT2rijg6Q7XggrijC8tXH3joWeewmRunmA',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Rmk5zt/V3fJ65cYxxmey3vB3a092UJeL2ix8pYnzRm2wY/6Z88wO0YctwMoT6+Zr',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/keyTable.bootstrap4.min.css',
		],
		'js' => [
			'js/keyTable.bootstrap4.min.js',
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

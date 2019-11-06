<?php
/**
 * DataTablesSelectAsset.php
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
 * @class \p2m\assets\DataTablesSelectAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesSelectAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesSelectAsset',
 */

namespace p2m\assets;

class DataTablesSelectAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-select-bs4';

	protected $packageVersion = '1.3.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/select/##-version-##',
		'sourcePath' => '@npm/datatables.net-select-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-GT95DpievPCoEMQK7wFUKNSmBUItft1absIeFqP30FKpnjz8YPvV34CC79GirigE',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-VH47LLsycMvCVCOaoWxeGUxJ+e+vC+aJ1sqzh5hZRyOLF28zVh/sBrJGW4tyrhI5',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/select.bootstrap4.min.css',
		],
		'js' => [
			'js/select.bootstrap4.min.js',
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

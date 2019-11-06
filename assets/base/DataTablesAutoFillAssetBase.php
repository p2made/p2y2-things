<?php
/**
 * DataTablesAutoFillAssetBase.php
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
 * @class \p2m\assets\base\DataTablesAutoFillAssetBase
 */

/**
 * Load this asset with...
 * p2m\assets\base\DataTablesAutoFillAssetBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesAutoFillAssetBase',
 */

namespace p2m\assets\base;

class DataTablesAutoFillAssetBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-autofill';

	protected $packageVersion = '2.3.4';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
		'sourcePath' => '@npm/datatables.net-autofill',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-2IhmQai5yN8b2EX5F5BWSAUJ0Te/LtSC0BGnUuoUcQcnD9qVVpurky9IRmLnegaN',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/dataTables.autoFill.min.js',
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

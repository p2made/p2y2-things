<?php
/**
 * DataTablesAutoFillAsset.php
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
 * @class \p2m\assets\DataTablesAutoFillAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesAutoFillAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesAutoFillAsset',
 */

namespace p2m\assets;

class DataTablesAutoFillAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-autofill-bs4';

	protected $packageVersion = '2.3.4';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
		'sourcePath' => '@npm/datatables.net-autofill-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-UQiYV506lsxVwwSgMRYrON2zHOJRxal00n3itqC8DoX7QzokQyQ/0ZMZVMvcc/2T',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ve+9IYl+b4Xe2YHsHn+EfUNo2uUyvLX7RtvuRViSXsY76AaPCRzKR3r0Vd19Z9uN',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/autoFill.bootstrap4.min.css',
		],
		'js' => [
			'js/autoFill.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\base\DataTablesAutoFillAssetBase',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

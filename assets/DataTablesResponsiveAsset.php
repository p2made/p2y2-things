<?php
/**
 * DataTablesResponsiveAsset.php
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
 * @class \p2m\assets\DataTablesResponsiveAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesResponsiveAsset',
 */

namespace p2m\assets;

class DataTablesResponsiveAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-responsive-bs4';

	protected $packageVersion = '2.2.3';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
		'sourcePath' => '@npm/datatables.net-responsive-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-50PJC5h4XMO6dSTQY4Ol00P2fJMX5wWrQb+vi0KHSDsQxt7/lf/h2aMpB+npa4xo',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-1dq/VDAF2KuzYz0N0KG39nI4v4MC7WeyP+lfpNEGOlCgaO61VwJxK7FRBYuiewdG',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/responsive.bootstrap4.min.css',
		],
		'js' => [
			'js/responsive.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\base\DataTablesResponsiveAssetBase',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

<?php
/**
 * DataTablesBundleAsset.php
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
 * @class \p2m\assets\DataTablesBundleAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesBundleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesBundleAsset',
 */

namespace p2m\assets;

class DataTablesBundleAsset extends \yii\web\AssetBundle
{
	public $depends = [
		'p2m\assets\JSZipAsset',
		'p2m\assets\PdfMakeAsset',
		'p2m\assets\DataTablesAsset',
		'p2m\assets\DataTablesAutoFillAsset',
		'p2m\assets\DataTablesButtonsAsset',
		'p2m\assets\DataTablesButtonsColVisAsset',
		'p2m\assets\DataTablesButtonsFlashAsset',
		'p2m\assets\DataTablesButtonsHTML5Asset',
		'p2m\assets\DataTablesButtonsPrintAsset',
		'p2m\assets\DataTablesColReorderAsset',
		'p2m\assets\DataTablesFixedColumnsAsset',
		'p2m\assets\DataTablesFixedHeaderAsset',
		'p2m\assets\DataTablesKeyTableAsset',
		'p2m\assets\DataTablesResponsiveAsset',
		'p2m\assets\DataTablesRowGroupAsset',
		'p2m\assets\DataTablesRowReorderAsset',
		'p2m\assets\DataTablesScrollerAsset',
		'p2m\assets\DataTablesSelectAsset',
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

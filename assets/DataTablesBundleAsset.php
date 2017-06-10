<?php
/**
 * DataTablesBundleAsset.php
 *
 * Yii2 asset for DataTables
 * https://www.datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesBundleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesBundleAsset',
 */

namespace p2m\assets;

class DataTablesBundleAsset extends \p2m\assets\base\P2LoaderAssetBundle
{
	public $depends = [
		'p2m\assets\JSZipAsset',
		'p2m\assets\PdfMakeAsset',
		'p2m\assets\datatables\DataTablesBootstrapAsset',
		'p2m\assets\datatables\DataTablesAutoFillAsset',
		'p2m\assets\datatables\DataTablesButtonsAsset',
		'p2m\assets\datatables\DataTablesButtonsColVisAsset',
		'p2m\assets\datatables\DataTablesButtonsFlashAsset',
		'p2m\assets\datatables\DataTablesButtonsHTML5Asset',
		'p2m\assets\datatables\DataTablesButtonsPrintAsset',
		'p2m\assets\datatables\DataTablesColReorderAsset',
		'p2m\assets\datatables\DataTablesFixedColumnsAsset',
		'p2m\assets\datatables\DataTablesFixedHeaderAsset',
		'p2m\assets\datatables\DataTablesKeyTableAsset',
		'p2m\assets\datatables\DataTablesResponsiveAsset',
		'p2m\assets\datatables\DataTablesRowGroupAsset',
		'p2m\assets\datatables\DataTablesRowReorderAsset',
		'p2m\assets\datatables\DataTablesScrollerAsset',
		'p2m\assets\datatables\DataTablesSelectAsset',
	];
}

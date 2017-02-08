<?php
/**
		'p2made\assets\datatables\ * DataTablesBundleAsset',
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\DataTablesBundleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\DataTablesBundleAsset',
 */

namespace p2made\assets;

class DataTablesBundleAsset extends \p2made\assets\base\P2LoaderAssetBundle
{
	public $depends = [
		'p2made\assets\JSZipAsset',
		'p2made\assets\PdfMakeAsset',
		'p2made\assets\datatables\DataTablesBootstrapAsset',
		'p2made\assets\datatables\DataTablesAutoFillAsset',
		'p2made\assets\datatables\DataTablesButtonsAsset',
		'p2made\assets\datatables\DataTablesColReorderAsset',
		'p2made\assets\datatables\DataTablesColVisAsset',
		'p2made\assets\datatables\DataTablesFixedColumnsAsset',
		'p2made\assets\datatables\DataTablesFixedHeaderAsset',
		'p2made\assets\datatables\DataTablesFlashExportAsset',
		'p2made\assets\datatables\DataTablesHTML5ExportAsset',
		'p2made\assets\datatables\DataTablesKeyTableAsset',
		'p2made\assets\datatables\DataTablesPrintViewAsset',
		'p2made\assets\datatables\DataTablesResponsiveAsset',
		'p2made\assets\datatables\DataTablesRowReorderAsset',
		'p2made\assets\datatables\DataTablesScrollerAsset',
		'p2made\assets\datatables\DataTablesSelectAsset',

		/*
		'p2made\assets\datatables\DataTablesAsset',
		'p2made\assets\datatables\DataTablesAutoFillAsset',
		'p2made\assets\datatables\DataTablesButtonsAsset',
		'p2made\assets\datatables\DataTablesColReorderAsset',
		'p2made\assets\datatables\DataTablesFiles',
		'p2made\assets\datatables\DataTablesFixedColumnsAsset',
		'p2made\assets\datatables\DataTablesFixedHeaderAsset',
		'p2made\assets\datatables\DataTablesKeyTableAsset',
		'p2made\assets\datatables\DataTablesResponsiveAsset',
		'p2made\assets\datatables\DataTablesRowReorderAsset',
		'p2made\assets\datatables\DataTablesScrollerAsset',
		'p2made\assets\datatables\DataTablesSelectAsset',
		 */
	];
}

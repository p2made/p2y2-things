<?php
/**
 * P2DataTablesPdfmakeAsset.php
 *
 * Yii2 asset for DataTables/pdfmake
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesPdfmakeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesPdfmakeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesPdfmakeAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesPdfmakeAsset extends AssetBundle
{
	public $depends = [
		'p2m\assets\P2DataTablesHtml5ExportAsset',
		'p2m\assets\P2PdfMakeAsset',
	];
}

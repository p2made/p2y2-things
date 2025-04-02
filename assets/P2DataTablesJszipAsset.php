<?php
/**
 * P2DataTablesJszipAsset.php
 *
 * Yii2 asset for DataTables/jszip
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesJszipAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesJszipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesJszipAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesJszipAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1';

	public $js = [
		'jszip.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-+mbV2IY1Zk/X1p/nWllGySJSUN8uMs+gUAN10Or95UBH0fpj6GfKgPmgC5EXieXG',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesHtml5ExportAsset',
	];
}

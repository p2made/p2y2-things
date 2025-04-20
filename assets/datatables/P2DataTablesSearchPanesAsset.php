<?php
/**
 * P2DataTablesSearchPanesAsset.php
 *
 * Yii2 asset for DataTables/searchPanes
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesSearchPanesAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesSearchPanesAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesSearchPanesAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesSearchPanesAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/searchpanes/2.3.3';

	public $js = [
		'js/searchPanes.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-lSurcF2KnvB8sCKtogfFCwJO4ZENtGvi0S5C4v6t9qh4R46oqvc3CEzcm2L/YIVg',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesSearchPanesBaseAsset',
	];
}

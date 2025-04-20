<?php
/**
 * P2DataTablesStateRestoreAsset.php
 *
 * Yii2 asset for DataTables/stateRestore
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesStateRestoreAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesStateRestoreAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesStateRestoreAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesStateRestoreAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/staterestore/1.4.1';

	public $js = [
		'js/stateRestore.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-FFqD1qzXEcTqEsiMkC2jpjMkpKo6jKIds3GL3qFNPt+KmHqLMwpW8zNN2r0bleaL',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesStateRestoreBaseAsset',
	];
}

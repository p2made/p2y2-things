<?php
/**
 * P2DataTablesSelectAsset.php
 *
 * Yii2 asset for DataTables/select
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesSelectAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesSelectAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesSelectAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesSelectAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/select/3.0.0';

	public $css = [
		'css/select.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-TlxQ7BelG5MWHP/TbW8dDV3/3kwuo6rinsUsoQdbLGPvurwx/DA2Z49RVLIOxVrG',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.select.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-Y/112jU1UJsyj7J/WhficUVfFZTLF2TgmBuDHBvJmYS8f+dGaz3ZNKxgwcg4YgP9',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesBootstrap5Asset',
	];
}


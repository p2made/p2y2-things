<?php
/**
 * P2DataTablesFixedHeaderAsset.php
 *
 * Yii2 asset for DataTables/fixedHeader
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesFixedHeaderAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesFixedHeaderAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesFixedHeaderAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesFixedHeaderAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/fixedheader/4.0.1';

	public $css = [
		'css/fixedHeader.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-OpjrOKWHgAo4SFhzmU3mBpqt+bXpISGTDqlG7KNsjknJnp72nQdpiQaPKzi1NkjR',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.fixedHeader.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-fLqXCJcrAdndivVvcmVV63KCTYYLJXHZwzlfgkRAiROtth7ZJaN3WJr+VaVe/asP',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesBootstrap5Asset',
	];
}

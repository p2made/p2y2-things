<?php
/**
 * P2DataTablesScrollerAsset.php
 *
 * Yii2 asset for DataTables/scroller
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesScrollerAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesScrollerAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesScrollerAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesScrollerAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/scroller/2.4.3';

	public $css = [
		'css/scroller.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-cZuy1OHhce2mtyO4CNHRjLhW3qKRgYvz2shDWmr3WQhEEESO+/mLmHmGFFD8kZfO',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.scroller.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-nakznh5a15VRD4Q2jpl+vqMjMCL666OX944SaU8OzAaROCqoFwpPRuVzjDt3HR6d',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesBootstrap5Asset',
	];
}

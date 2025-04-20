<?php
/**
 * P2DataTablesPrintAsset.php
 *
 * Yii2 asset for DataTables/print
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesPrintAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesPrintAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesPrintAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesPrintAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/buttons/3.2.2';

	public $js = [
		'js/buttons.print.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-FvTRywo5HrkPlBKFrm2tT8aKxIcI/VU819roC/K/8UrVwrl4XsF3RKRKiCAKWNly',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesButtonsAsset',
	];
}

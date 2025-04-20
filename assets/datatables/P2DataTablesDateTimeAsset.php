<?php
/**
 * P2DataTablesDateTimeAsset.php
 *
 * Yii2 asset for DataTables/dateTime
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesDateTimeAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesDateTimeAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesDateTimeAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesDateTimeAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/datetime/1.5.5';

	public $css = [
		'css/dataTables.dateTime.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-YerHysLtHRSApTDI4rm8VWFCYYmfBxaFWwYtysBUoNAtgL4Kbf04QSepZbpz5wji',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.dateTime.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-1a4pxt2oxato6x8A+75Oxr1nWUJWtjgWPom0n9VFGK/JD5+u9+3oKSAzW6k0/iMb',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesBootstrap5Asset',
	];
}

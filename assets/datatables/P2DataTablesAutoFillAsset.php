<?php
/**
 * P2DataTablesAutoFillAsset.php
 *
 * Yii2 asset for DataTables/Autofill
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesAutoFillAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesAutoFillAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesAutoFillAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesAutoFillAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/autofill/2.7.0';

	public $js = [
		'js/autoFill.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-eJTyWdE/ertY/uPWJCMI5AQkuH2WX6kCJRv9yhwNzkmNh1+5X8VMEfUy9X/XANDj',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesAutoFillBaseAsset',
	];
}

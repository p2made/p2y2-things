<?php
/**
 * P2DataTablesButtonsAsset.php
 *
 * Yii2 asset for DataTables/Buttons
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesButtonsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesButtonsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesButtonsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/buttons/3.2.2';

	public $js = [
		'js/buttons.bootstrap5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-BdedgzbgcQH1hGtNWLD56fSa7LYUCzyRMuDzgr5+9etd1/W7eT0kHDrsADMmx60k',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesButtonsBaseAsset',
	];
}

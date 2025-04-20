<?php
/**
 * P2DataTablesHtml5ExportAsset.php
 *
 * Yii2 asset for DataTables/html5
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\datatables\P2DataTablesHtml5ExportAsset
 */

/**
 * Load this asset with...
p2m\assets\datatables\P2DataTablesHtml5ExportAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\datatables\P2DataTablesHtml5ExportAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesHtml5ExportAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/buttons/3.2.2';

	public $js = [
		'js/buttons.html5.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-+E6fb8f66UPOVDHKlEc1cfguF7DOTQQ70LNUnlbtywZiyoyQWqtrMjfTnWyBlN/Y',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesButtonsAsset',
	];
}

<?php
/**
 * P2DataTablesColVisAsset.php
 *
 * Yii2 asset for DataTables/ColVis
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesColVisAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesColVisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesColVisAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesColVisAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/2.2.2';

	public $js = [
		'js/buttons.colVis.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-LC8PmH0Tdjy6c1Hesl75hUSKQuoIo3PCAr3svr0xJ4y90sNaTEMLK5n68Fl5VBqB',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesButtonsAsset',
	];
}

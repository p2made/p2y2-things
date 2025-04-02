<?php
/**
 * P2DataTablesResponsiveAsset.php
 *
 * Yii2 asset for DataTables/Responsive
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesResponsiveAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesResponsiveAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesResponsiveAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/responsive/3.0.4';

	public $js = [
		'js/responsive.bootstrap5.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-hyp/YDWGBMFqg7pJuS+y+2VWJkwnOyX+oMN9fWcxINo2flqjC/SdNaHj8LIV4zKJ',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2DataTablesResponsiveBaseAsset',
	];
}

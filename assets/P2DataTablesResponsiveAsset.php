<?php
/**
 * P2DataTablesResponsiveAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
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

p2m\assets\P2DataTablesResponsiveAsset::register($this);

 * or...

use p2m\assets\P2DataTablesResponsiveAsset;
P2DataTablesResponsiveAsset::register($this);

 * or specify as a dependency with...

		'p2m\assets\P2DataTablesResponsiveAsset',

 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesResponsiveAsset extends AssetBundle
{
	// @var string
	public $sourcePath = '@p2m/assets/lib/datatables';

	// @var array
	public $js = [
		'js/p2-datatables.min.js',
	];

	public $depends = [
		'p2m\assets\datatables\P2DataTablesBootstrap5Asset',
		'p2m\assets\datatables\P2DataTablesResponsiveAsset',
	];
}

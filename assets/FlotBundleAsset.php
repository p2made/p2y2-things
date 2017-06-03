<?php
/**
 * FlotBundleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FlotBundleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FlotBundleAsset',
 */

namespace p2m\assets;

class FlotBundleAsset extends \p2m\assets\base\P2LoaderAssetBundle
{
	public $depends = [
		'p2m\assets\flot\FlotAsset',
		'p2m\assets\ColorHelpersAsset',
		'p2m\assets\flot\FlotCanvasAsset',
		'p2m\assets\flot\FlotCategoriesAsset',
		'p2m\assets\flot\FlotCrosshairAsset',
		'p2m\assets\flot\FlotErrorbarsAsset',
		'p2m\assets\flot\FlotFillbetweenAsset',
		'p2m\assets\flot\FlotImageAsset',
		'p2m\assets\flot\FlotNavigateAsset',
		'p2m\assets\flot\FlotPieAsset',
		'p2m\assets\flot\FlotResizeAsset',
		'p2m\assets\flot\FlotSelectionAsset',
		'p2m\assets\flot\FlotStackAsset',
		'p2m\assets\flot\FlotSymbolAsset',
		'p2m\assets\flot\FlotThresholdAsset',
		'p2m\assets\flot\FlotTimeAsset',
		'p2m\assets\flot\FlotTooltipAsset',
	];
}

<?php
/**
 * FlotBundleAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FlotBundleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FlotBundleAsset',
 */

namespace p2made\assets;

class FlotBundleAsset extends \p2made\assets\base\P2LoaderAssetBundle
{
	public $depends = [
		'p2made\assets\flot\FlotAsset',
		'p2made\assets\ColorHelpersAsset',
		'p2made\assets\flot\FlotCanvasAsset',
		'p2made\assets\flot\FlotCategoriesAsset',
		'p2made\assets\flot\FlotCrosshairAsset',
		'p2made\assets\flot\FlotErrorbarsAsset',
		'p2made\assets\flot\FlotFillbetweenAsset',
		'p2made\assets\flot\FlotImageAsset',
		'p2made\assets\flot\FlotNavigateAsset',
		'p2made\assets\flot\FlotPieAsset',
		'p2made\assets\flot\FlotResizeAsset',
		'p2made\assets\flot\FlotSelectionAsset',
		'p2made\assets\flot\FlotStackAsset',
		'p2made\assets\flot\FlotSymbolAsset',
		'p2made\assets\flot\FlotThresholdAsset',
		'p2made\assets\flot\FlotTimeAsset',
		'p2made\assets\flot\FlotTooltipAsset',
	];
}

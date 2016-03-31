<?php
/**
 * FlotBundleAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\assets;

class FlotBundleAsset extends \yii\web\AssetBundle
{
	public $depends = [
		'p2made\assets\parts\FlotAsset',
		'p2made\assets\ColorHelpersAsset',
		'p2made\assets\parts\FlotCanvasAsset',
		'p2made\assets\parts\FlotCategoriesAsset',
		'p2made\assets\parts\FlotCrosshairAsset',
		'p2made\assets\parts\FlotErrorbarsAsset',
		'p2made\assets\parts\FlotFillbetweenAsset',
		'p2made\assets\parts\FlotImageAsset',
		'p2made\assets\parts\FlotNavigateAsset',
		'p2made\assets\parts\FlotPieAsset',
		'p2made\assets\parts\FlotResizeAsset',
		'p2made\assets\parts\FlotSelectionAsset',
		'p2made\assets\parts\FlotStackAsset',
		'p2made\assets\parts\FlotSymbolAsset',
		'p2made\assets\parts\FlotThresholdAsset',
		'p2made\assets\parts\FlotTimeAsset',
		'p2made\assets\parts\FlotTooltipAsset',
	];
}

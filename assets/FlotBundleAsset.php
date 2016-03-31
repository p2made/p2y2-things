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
		'p2made\assets\FlotAsset',
		'p2made\assets\ColorHelpersAsset',
		'p2made\assets\FlotCanvasAsset',
		'p2made\assets\FlotCategoriesAsset',
		'p2made\assets\FlotCrosshairAsset',
		'p2made\assets\FlotErrorbarsAsset',
		'p2made\assets\FlotFillbetweenAsset',
		'p2made\assets\FlotImageAsset',
		'p2made\assets\FlotNavigateAsset',
		'p2made\assets\FlotPieAsset',
		'p2made\assets\FlotResizeAsset',
		'p2made\assets\FlotSelectionAsset',
		'p2made\assets\FlotStackAsset',
		'p2made\assets\FlotSymbolAsset',
		'p2made\assets\FlotThresholdAsset',
		'p2made\assets\FlotTimeAsset',
		'p2made\assets\FlotTooltipAsset',
	];
}

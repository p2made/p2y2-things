<?php
/**
 * _ExampleLoaderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\_ExampleLoaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\_ExampleLoaderAsset',
 */

namespace p2made\assets; /* edit this if using elsewhere */

class _ExampleLoaderAsset extends \p2made\assets\base\P2LoaderAssetBundle
{

	/**
	 * The 'depends' is where the action of this one happens
	 * so it's first up here....
	 */
	public $depends = [
		// Put all the dependancies you want in here.
		'p2made\assets\P2CoreLoaderAsset',
	];

	/**
	 * A Loader is just to load a selection of other assets
	 * without loading any assets of its own...
	 *
	 * So the paths & URLs are null...
	 • but that's been specified in P2LoaderAssetBundle.
	 */

	'cssOptions' => [
		// cssOptions like any other assets
		// or leave out if no cssOptions
	],

	'jsOptions' => [
		// jsOptions like any other assets
		// or leave out if no jsOptions
	],

}

/* dependency lines for all assets... */
/**
		'p2made\assets\_ExampleAsset',
		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\BootstrapSweetalertAsset',
		'p2made\assets\BootstrapSwitchAsset',
		'p2made\assets\CircleButtonsAsset',
		'p2made\assets\ColorHelpersAsset',
		'p2made\assets\DataTablesBundleAsset',
		'p2made\assets\datatables\DataTablesAsset',
		'p2made\assets\datatables\DataTablesAutoFillAsset',
		'p2made\assets\datatables\DataTablesButtonsAsset',
		'p2made\assets\datatables\DataTablesColReorderAsset',
		'p2made\assets\datatables\DataTablesFiles',
		'p2made\assets\datatables\DataTablesFixedColumnsAsset',
		'p2made\assets\datatables\DataTablesFixedHeaderAsset',
		'p2made\assets\datatables\DataTablesKeyTableAsset',
		'p2made\assets\datatables\DataTablesResponsiveAsset',
		'p2made\assets\datatables\DataTablesRowReorderAsset',
		'p2made\assets\datatables\DataTablesScrollerAsset',
		'p2made\assets\datatables\DataTablesSelectAsset',
		'p2made\assets\EkkoLightboxAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlagIconCssAsset',
		'p2made\assets\FlotBundleAsset',
		'p2made\assets\flot\FlotAsset',
		'p2made\assets\flot\FlotCanvasAsset',
		'p2made\assets\flot\FlotCategoriesAsset',
		'p2made\assets\flot\FlotChartsAsset',
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
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\FullCalendarPrintAsset',
		'p2made\assets\GMapsApiAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\JqueryMigrateAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\Lightbox2Asset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\QunitAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\TimelineCssAsset',
		'p2made\assets\WowAsset',
 */

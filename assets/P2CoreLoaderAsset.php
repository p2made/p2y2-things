<?php
/**
 * P2CoreLoaderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\P2CoreLoaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\P2CoreLoaderAsset',
 */

namespace p2made\assets;

class P2CoreLoaderAsset extends \p2made\assets\base\P2LoaderAssetBundle
{

	public $depends = [
		'yii\web\YiiAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\JuiAsset',
	];

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
			'p2made\assets\DataTablesAsset',
			'p2made\assets\DataTablesAutoFillAsset',
			'p2made\assets\DataTablesBundleAsset',
			'p2made\assets\DataTablesButtonsAsset',
			'p2made\assets\DataTablesColReorderAsset',
			'p2made\assets\DataTablesFiles',
			'p2made\assets\DataTablesFixedColumnsAsset',
			'p2made\assets\DataTablesFixedHeaderAsset',
			'p2made\assets\DataTablesKeyTableAsset',
			'p2made\assets\DataTablesResponsiveAsset',
			'p2made\assets\DataTablesRowReorderAsset',
			'p2made\assets\DataTablesScrollerAsset',
			'p2made\assets\DataTablesSelectAsset',
			'p2made\assets\EkkoLightboxAsset',
			'p2made\assets\FitvidsAsset',
			'p2made\assets\FlagIconCssAsset',
			'p2made\assets\FlotAsset',
			'p2made\assets\FlotBundleAsset',
			'p2made\assets\FlotCanvasAsset',
			'p2made\assets\FlotCategoriesAsset',
			'p2made\assets\FlotChartsAsset',
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

			'p2made\assets\compatibility\Html5shivAsset',
			'p2made\assets\compatibility\PrintShivAsset',
			'p2made\assets\compatibility\RespondAsset',
 */

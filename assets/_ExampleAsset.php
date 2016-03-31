<?php
/**
 * _ExampleAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\assets; /* edit this if using elsewhere */

class _ExampleAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		/**
		 * 'published' section
		 * use this for published version of assets
		 * leave out if there's no published version
		 */
		'published' => [
			'sourcePath' => '@path/to/assets/folder',
			'css' => [
				'css/css_file.css',
			],
			'js' => [
				'js/js_file.js',
			],
		],

		/**
		 * 'static' section
		 * use this for static version of assets
		 * leave out if there's no static version
		 */
		'static' => [
			'baseUrl' => '//example.com/path_to_asset',
			'css' => [
				'css/css_file.css',
			],
			'js' => [
				'js/js_file.js',
			],
		],

		'cssOptions' => [
			// cssOptions like any other assets
			// or leave out if no cssOptions
		],
		'jsOptions' => [
			// jsOptions like any other assets
			// or leave out if no jsOptions
		],
		'depends' => [
			// depends like any other assets
			// or leave out if no depends
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
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

/* register lines for all assets... */
/**
p2made\assets\_ExampleAsset::register($this);
p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\BootstrapSweetalertAsset::register($this);
p2made\assets\BootstrapSwitchAsset::register($this);
p2made\assets\CircleButtonsAsset::register($this);
p2made\assets\ColorHelpersAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\DataTablesAutoFillAsset::register($this);
p2made\assets\DataTablesBundleAsset::register($this);
p2made\assets\DataTablesButtonsAsset::register($this);
p2made\assets\DataTablesColReorderAsset::register($this);
p2made\assets\DataTablesFiles::register($this);
p2made\assets\DataTablesFixedColumnsAsset::register($this);
p2made\assets\DataTablesFixedHeaderAsset::register($this);
p2made\assets\DataTablesKeyTableAsset::register($this);
p2made\assets\DataTablesResponsiveAsset::register($this);
p2made\assets\DataTablesRowReorderAsset::register($this);
p2made\assets\DataTablesScrollerAsset::register($this);
p2made\assets\DataTablesSelectAsset::register($this);
p2made\assets\EkkoLightboxAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlagIconCssAsset::register($this);
p2made\assets\FlotAsset::register($this);
p2made\assets\FlotBundleAsset::register($this);
p2made\assets\FlotCanvasAsset::register($this);
p2made\assets\FlotCategoriesAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FlotCrosshairAsset::register($this);
p2made\assets\FlotErrorbarsAsset::register($this);
p2made\assets\FlotFillbetweenAsset::register($this);
p2made\assets\FlotImageAsset::register($this);
p2made\assets\FlotNavigateAsset::register($this);
p2made\assets\FlotPieAsset::register($this);
p2made\assets\FlotResizeAsset::register($this);
p2made\assets\FlotSelectionAsset::register($this);
p2made\assets\FlotStackAsset::register($this);
p2made\assets\FlotSymbolAsset::register($this);
p2made\assets\FlotThresholdAsset::register($this);
p2made\assets\FlotTimeAsset::register($this);
p2made\assets\FlotTooltipAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\FullCalendarPrintAsset::register($this);
p2made\assets\GMapsApiAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\JqueryMigrateAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\Lightbox2Asset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\QunitAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\TimelineCssAsset::register($this);
p2made\assets\WowAsset::register($this);

p2made\assets\compatibility\Html5shivAsset::register($this);
p2made\assets\compatibility\PrintShivAsset::register($this);
p2made\assets\compatibility\RespondAsset::register($this);
 */

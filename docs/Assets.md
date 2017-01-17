P2Y2 Assets
===========

Resource | Asset Class
-------- | -----------
P2CoreAsset | `p2made\assets\P2CoreAsset`
[Animate.css](http://daneden.github.io/animate.css/) | `p2made\assets\AnimateAsset`
[Bootstrap](http://getbootstrap.com) | `p2made\assets\BootstrapAsset`
[Bootswatch Themes](http://bootswatch.com) | As over-ride settings on `p2made\assets\BootstrapAsset`
[Bootstrap Social](https://lipis.github.io/bootstrap-social/) | `p2made\assets\BootstrapSocialAsset`
[Bootstrap Sweetalert](http://lipis.github.io/bootstrap-sweetalert/) | `p2made\assets\BootstrapSweetalertAsset`
[Bootstrap Switch](http://www.bootstrap-switch.org) | `p2made\assets\BootstrapSwitchAsset`
circle-buttons | `p2made\assets\CircleButtonsAsset`
[]() | `p2made\assets\ColorHelpersAsset`
[dataTables](http://datatables.net) | `p2made\assets\DataTablesBundleAsset` et al.
[]() | `p2made\assets\EkkoLightboxAsset`
[FitVids.js](http://fitvidsjs.com) | `p2made\assets\FitvidsAsset`
[flag-icon-css](https://lipis.github.io/flag-icon-css/) | `p2made\assets\FlagIconCssAsset`
[Flot Charts](http://www.flotcharts.org) | `p2made\assets\FlotBundleAsset` et al.
[Flot tooltip](https://github.com/krzysu/flot.tooltip) | `p2made\assets\flot\FlotTooltipAsset`
[FontAwesome](http://fortawesome.github.io/Font-Awesome/) | `p2made\assets\FontAwesomeAsset`
[FullCalendar](http://fullcalendar.io) | `p2made\assets\FullCalendarAsset` & `p2made\assets\FullCalendarPrintAsset`
[]() | `p2made\assets\GMapsApiAsset`
[GMaps.js](https://hpneo.github.io/gmaps/) | `p2made\assets\GMapsAsset`
[Holder.js](http://imsky.github.io/holder/) | `p2made\assets\HolderAsset`
[Isotope](http://isotope.metafizzy.co) | `p2made\assets\IsotopeAsset`
[jQuery](http://jquery.com) | `p2made\assets\JqueryAsset`
[jquery-countTo](https://github.com/mhuggins/jquery-countTo) | `p2made\assets\JqueryCountToAsset`
[jQuery Migrate](http://jquery.com) | `p2made\assets\JqueryMigrateAsset`
[]() | `p2made\assets\JSZipAsset`
[jQuery-ui](http://jqueryui.com) | `p2made\assets\JuiAsset`
[]() | `p2made\assets\Lightbox2Asset`
[Masonry](http://masonry.desandro.com) | `p2made\assets\MasonryAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `p2made\assets\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `p2made\assets\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `p2made\assets\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `p2made\assets\MorrisAsset`
[]() | `p2made\assets\PdfMakeAsset`
[prettyPhoto](http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) | `p2made\assets\PrettyPhotoAsset`
[]() | `p2made\assets\QunitAsset`
[Raphaël](http://raphaeljs.com) | `p2made\assets\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `p2made\assets\SweetAlertAsset`
timeline | `p2made\assets\TimelineAsset`
[Timeline.css](https://github.com/christian-fei/Timeline.css) | `p2made\assets\TimelineCssAsset`
[WOW.js](http://mynameismatthieu.com/WOW/) | `p2made\assets\WowAsset`

The asset collection gives the option of using either published assets or assets from CDNs.

Usage
-----

First add these lines to the `params` section of your config file.

```
	'p2made' => [
		'useStatic' => true, // false or not set to use published assets
	],
```

You can substitute any of the themes from [Bootswatch](http://bootswatch.com) by setting:

```
	'p2made' => [
		...
		'bwTheme' = 'cerulean',

	],
```

Using one of: `'cerulean'`, `'cosmo'`, `'cyborg'`, `'darkly'`, `'flatly'`, `'journal'`, `'lumen'`, `'paper'`, `'readable'`, `'sandstone'`, `'simplex'`, `'slate'`, `'spacelab'`, `'superhero'`, `'united'`, `'yeti'`.


Register assets in views with:

```
p2made\assets\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```
	public $depends = [
		// ...
	'p2made\assets\AssetNameAsset',
		// ...
	];
```

The `register` lines for all assets...

```
p2made\assets\P2CoreAsset::register($this);
p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\BootstrapSweetalertAsset::register($this);
p2made\assets\BootstrapSwitchAsset::register($this);
p2made\assets\CircleButtonsAsset::register($this);
p2made\assets\ColorHelpersAsset::register($this);
p2made\assets\DataTablesBundleAsset::register($this);
p2made\assets\datatables\DataTablesAutoFillAsset::register($this);
p2made\assets\datatables\DataTablesBootstrapAsset::register($this);
p2made\assets\datatables\DataTablesButtonsAsset::register($this);
p2made\assets\datatables\DataTablesColReorderAsset::register($this);
p2made\assets\datatables\DataTablesColVisAsset::register($this);
p2made\assets\datatables\DataTablesFixedColumnsAsset::register($this);
p2made\assets\datatables\DataTablesFixedHeaderAsset::register($this);
p2made\assets\datatables\DataTablesFlashExportAsset::register($this);
p2made\assets\datatables\DataTablesHTML5ExportAsset::register($this);
p2made\assets\datatables\DataTablesKeyTableAsset::register($this);
p2made\assets\datatables\DataTablesPrintViewAsset::register($this);
p2made\assets\datatables\DataTablesResponsiveAsset::register($this);
p2made\assets\datatables\DataTablesRowReorderAsset::register($this);
p2made\assets\datatables\DataTablesScrollerAsset::register($this);
p2made\assets\datatables\DataTablesSelectAsset::register($this);
p2made\assets\EkkoLightboxAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlagIconCssAsset::register($this);
p2made\assets\FlotBundleAsset::register($this);
p2made\assets\flot\FlotAsset::register($this);
p2made\assets\flot\FlotAssetBase::register($this);
p2made\assets\flot\FlotCanvasAsset::register($this);
p2made\assets\flot\FlotCategoriesAsset::register($this);
p2made\assets\flot\FlotChartsAsset::register($this);
p2made\assets\flot\FlotCrosshairAsset::register($this);
p2made\assets\flot\FlotErrorbarsAsset::register($this);
p2made\assets\flot\FlotFillbetweenAsset::register($this);
p2made\assets\flot\FlotImageAsset::register($this);
p2made\assets\flot\FlotNavigateAsset::register($this);
p2made\assets\flot\FlotPieAsset::register($this);
p2made\assets\flot\FlotResizeAsset::register($this);
p2made\assets\flot\FlotSelectionAsset::register($this);
p2made\assets\flot\FlotStackAsset::register($this);
p2made\assets\flot\FlotSymbolAsset::register($this);
p2made\assets\flot\FlotThresholdAsset::register($this);
p2made\assets\flot\FlotTimeAsset::register($this);
p2made\assets\flot\FlotTooltipAsset::register($this);
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
p2made\assets\JSZipAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\Lightbox2Asset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PdfMakeAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\QunitAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\TimelineCssAsset::register($this);
p2made\assets\WowAsset::register($this);
```

& the `depends` lines for all assets...

```
		'p2made\assets\P2CoreAsset',
		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\BootstrapSweetalertAsset',
		'p2made\assets\BootstrapSwitchAsset',
		'p2made\assets\CircleButtonsAsset',
		'p2made\assets\ColorHelpersAsset',
		'p2made\assets\DataTablesBundleAsset',
		'p2made\assets\datatables\DataTablesAutoFillAsset',
		'p2made\assets\datatables\DataTablesBootstrapAsset',
		'p2made\assets\datatables\DataTablesButtonsAsset',
		'p2made\assets\datatables\DataTablesColReorderAsset',
		'p2made\assets\datatables\DataTablesColVisAsset',
		'p2made\assets\datatables\DataTablesFixedColumnsAsset',
		'p2made\assets\datatables\DataTablesFixedHeaderAsset',
		'p2made\assets\datatables\DataTablesFlashExportAsset',
		'p2made\assets\datatables\DataTablesHTML5ExportAsset',
		'p2made\assets\datatables\DataTablesKeyTableAsset',
		'p2made\assets\datatables\DataTablesPrintViewAsset',
		'p2made\assets\datatables\DataTablesResponsiveAsset',
		'p2made\assets\datatables\DataTablesRowReorderAsset',
		'p2made\assets\datatables\DataTablesScrollerAsset',
		'p2made\assets\datatables\DataTablesSelectAsset',
		'p2made\assets\EkkoLightboxAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlagIconCssAsset',
		'p2made\assets\FlotBundleAsset',
		'p2made\assets\flot\FlotAsset',
		'p2made\assets\flot\FlotAssetBase',
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
		'p2made\assets\JSZipAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\Lightbox2Asset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PdfMakeAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\QunitAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\TimelineCssAsset',
		'p2made\assets\WowAsset',
```

For usage of the asset resources see their web pages.

Sub-Classing
------------

Copy `@vendor/p2made/yii2-p2y2-things/assets/_ExampleAsset.php` to your own assets directory & customise as needed.

You can have a `published` version of your asset &/or a `static` version.

- The `published` version is just like any other published assets.
- The `static` version could be a CDN, or it could be your own static source, which could be as simple as files & folders in a sub-domain.

- If only one asset version if provided, only that version can be used.
- If both are provided, the setting of `useStatic`, as described above, will determine which is used.

Sources
-------

The following sources are used for published assets...

- for PHP packages, a trusted `composer` package as a dependancy
- for CSS &/or JS packages, a trusted `bower` package as a dependancy
- downloaded files included in this package if a suitable `composer` or `bower` package is not available.

In order of preference, the CDNs used are...

- vendor CDN
- [cdnjs](https://cdnjs.com/)
- [jsDelivr](http://www.jsdelivr.com/)

Very occasionally the CDN version of a resource may be a little behind the published version.



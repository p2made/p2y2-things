P2Y2 Assets
===========

Resource | Asset Class
-------- | -----------
P2CoreAsset | `p2m\assets\P2CoreAsset`
[Animate.css](http://daneden.github.io/animate.css/) | `p2m\assets\AnimateAsset`
[Bootstrap](http://getbootstrap.com) | `p2m\assets\BootstrapAsset`
[Bootswatch Themes](http://bootswatch.com) | As over-ride settings on `p2m\assets\BootstrapAsset`
[Bootstrap Social](https://lipis.github.io/bootstrap-social/) | `p2m\assets\BootstrapSocialAsset`
[Bootstrap Sweetalert](http://lipis.github.io/bootstrap-sweetalert/) | `p2m\assets\BootstrapSweetalertAsset`
[Bootstrap Switch](http://www.bootstrap-switch.org) | `p2m\assets\BootstrapSwitchAsset`
circle-buttons | `p2m\assets\CircleButtonsAsset`
[]() | `p2m\assets\ColorHelpersAsset`
[dataTables](http://datatables.net) | `p2m\assets\DataTablesBundleAsset` et al.
[]() | `p2m\assets\EkkoLightboxAsset`
[FitVids.js](http://fitvidsjs.com) | `p2m\assets\FitvidsAsset`
[flag-icon-css](https://lipis.github.io/flag-icon-css/) | `p2m\assets\FlagIconCssAsset`
[Flot Charts](http://www.flotcharts.org) | `p2m\assets\FlotBundleAsset` et al.
[Flot tooltip](https://github.com/krzysu/flot.tooltip) | `p2m\assets\flot\FlotTooltipAsset`
[FontAwesome](http://fortawesome.github.io/Font-Awesome/) | `p2m\assets\FontAwesomeAsset`
[FullCalendar](http://fullcalendar.io) | `p2m\assets\FullCalendarAsset` & `p2m\assets\FullCalendarPrintAsset`
[]() | `p2m\assets\GMapsApiAsset`
[GMaps.js](https://hpneo.github.io/gmaps/) | `p2m\assets\GMapsAsset`
[Holder.js](http://imsky.github.io/holder/) | `p2m\assets\HolderAsset`
[Isotope](http://isotope.metafizzy.co) | `p2m\assets\IsotopeAsset`
[jQuery](http://jquery.com) | `p2m\assets\JqueryAsset`
[jquery-countTo](https://github.com/mhuggins/jquery-countTo) | `p2m\assets\JqueryCountToAsset`
[jQuery Migrate](http://jquery.com) | `p2m\assets\JqueryMigrateAsset`
[]() | `p2m\assets\JSZipAsset`
[jQuery-ui](http://jqueryui.com) | `p2m\assets\JuiAsset`
[]() | `p2m\assets\Lightbox2Asset`
[Masonry](http://masonry.desandro.com) | `p2m\assets\MasonryAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `p2m\assets\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `p2m\assets\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `p2m\assets\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `p2m\assets\MorrisAsset`
[]() | `p2m\assets\PdfMakeAsset`
[prettyPhoto](http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) | `p2m\assets\PrettyPhotoAsset`
[]() | `p2m\assets\QunitAsset`
[Raphaël](http://raphaeljs.com) | `p2m\assets\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `p2m\assets\SweetAlertAsset`
timeline | `p2m\assets\TimelineAsset`
[Timeline.css](https://github.com/christian-fei/Timeline.css) | `p2m\assets\TimelineCssAsset`
[WOW.js](http://mynameismatthieu.com/WOW/) | `p2m\assets\WowAsset`

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
p2m\assets\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```
	public $depends = [
		// ...
	'p2m\assets\AssetNameAsset',
		// ...
	];
```

The `register` lines for all assets...

```
p2m\assets\P2CoreAsset::register($this);
p2m\assets\AnimateAsset::register($this);
p2m\assets\BootstrapAsset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);
p2m\assets\BootstrapSweetalertAsset::register($this);
p2m\assets\BootstrapSwitchAsset::register($this);
p2m\assets\CircleButtonsAsset::register($this);
p2m\assets\ColorHelpersAsset::register($this);
p2m\assets\DataTablesBundleAsset::register($this);
p2m\assets\datatables\DataTablesAutoFillAsset::register($this);
p2m\assets\datatables\DataTablesBootstrapAsset::register($this);
p2m\assets\datatables\DataTablesButtonsAsset::register($this);
p2m\assets\datatables\DataTablesColReorderAsset::register($this);
p2m\assets\datatables\DataTablesColVisAsset::register($this);
p2m\assets\datatables\DataTablesFixedColumnsAsset::register($this);
p2m\assets\datatables\DataTablesFixedHeaderAsset::register($this);
p2m\assets\datatables\DataTablesFlashExportAsset::register($this);
p2m\assets\datatables\DataTablesHTML5ExportAsset::register($this);
p2m\assets\datatables\DataTablesKeyTableAsset::register($this);
p2m\assets\datatables\DataTablesPrintViewAsset::register($this);
p2m\assets\datatables\DataTablesResponsiveAsset::register($this);
p2m\assets\datatables\DataTablesRowReorderAsset::register($this);
p2m\assets\datatables\DataTablesScrollerAsset::register($this);
p2m\assets\datatables\DataTablesSelectAsset::register($this);
p2m\assets\EkkoLightboxAsset::register($this);
p2m\assets\FitvidsAsset::register($this);
p2m\assets\FlagIconCssAsset::register($this);
p2m\assets\FlotBundleAsset::register($this);
p2m\assets\flot\FlotAsset::register($this);
p2m\assets\flot\FlotAssetBase::register($this);
p2m\assets\flot\FlotCanvasAsset::register($this);
p2m\assets\flot\FlotCategoriesAsset::register($this);
p2m\assets\flot\FlotChartsAsset::register($this);
p2m\assets\flot\FlotCrosshairAsset::register($this);
p2m\assets\flot\FlotErrorbarsAsset::register($this);
p2m\assets\flot\FlotFillbetweenAsset::register($this);
p2m\assets\flot\FlotImageAsset::register($this);
p2m\assets\flot\FlotNavigateAsset::register($this);
p2m\assets\flot\FlotPieAsset::register($this);
p2m\assets\flot\FlotResizeAsset::register($this);
p2m\assets\flot\FlotSelectionAsset::register($this);
p2m\assets\flot\FlotStackAsset::register($this);
p2m\assets\flot\FlotSymbolAsset::register($this);
p2m\assets\flot\FlotThresholdAsset::register($this);
p2m\assets\flot\FlotTimeAsset::register($this);
p2m\assets\flot\FlotTooltipAsset::register($this);
p2m\assets\FontAwesomeAsset::register($this);
p2m\assets\FullCalendarAsset::register($this);
p2m\assets\FullCalendarPrintAsset::register($this);
p2m\assets\GMapsApiAsset::register($this);
p2m\assets\GMapsAsset::register($this);
p2m\assets\HolderAsset::register($this);
p2m\assets\IsotopeAsset::register($this);
p2m\assets\JqueryAsset::register($this);
p2m\assets\JqueryCountToAsset::register($this);
p2m\assets\JqueryMigrateAsset::register($this);
p2m\assets\JSZipAsset::register($this);
p2m\assets\JuiAsset::register($this);
p2m\assets\Lightbox2Asset::register($this);
p2m\assets\MasonryAsset::register($this);
p2m\assets\MetisMenuAsset::register($this);
p2m\assets\MomentAsset::register($this);
p2m\assets\MomentTimezoneAsset::register($this);
p2m\assets\MorrisAsset::register($this);
p2m\assets\PdfMakeAsset::register($this);
p2m\assets\PrettyPhotoAsset::register($this);
p2m\assets\QunitAsset::register($this);
p2m\assets\RaphaelAsset::register($this);
p2m\assets\SweetAlertAsset::register($this);
p2m\assets\TimelineAsset::register($this);
p2m\assets\TimelineCssAsset::register($this);
p2m\assets\WowAsset::register($this);
```

& the `depends` lines for all assets...

```
		'p2m\assets\P2CoreAsset',
		'p2m\assets\AnimateAsset',
		'p2m\assets\BootstrapAsset',
		'p2m\assets\BootstrapSocialAsset',
		'p2m\assets\BootstrapSweetalertAsset',
		'p2m\assets\BootstrapSwitchAsset',
		'p2m\assets\CircleButtonsAsset',
		'p2m\assets\ColorHelpersAsset',
		'p2m\assets\DataTablesBundleAsset',
		'p2m\assets\datatables\DataTablesAutoFillAsset',
		'p2m\assets\datatables\DataTablesBootstrapAsset',
		'p2m\assets\datatables\DataTablesButtonsAsset',
		'p2m\assets\datatables\DataTablesColReorderAsset',
		'p2m\assets\datatables\DataTablesColVisAsset',
		'p2m\assets\datatables\DataTablesFixedColumnsAsset',
		'p2m\assets\datatables\DataTablesFixedHeaderAsset',
		'p2m\assets\datatables\DataTablesFlashExportAsset',
		'p2m\assets\datatables\DataTablesHTML5ExportAsset',
		'p2m\assets\datatables\DataTablesKeyTableAsset',
		'p2m\assets\datatables\DataTablesPrintViewAsset',
		'p2m\assets\datatables\DataTablesResponsiveAsset',
		'p2m\assets\datatables\DataTablesRowReorderAsset',
		'p2m\assets\datatables\DataTablesScrollerAsset',
		'p2m\assets\datatables\DataTablesSelectAsset',
		'p2m\assets\EkkoLightboxAsset',
		'p2m\assets\FitvidsAsset',
		'p2m\assets\FlagIconCssAsset',
		'p2m\assets\FlotBundleAsset',
		'p2m\assets\flot\FlotAsset',
		'p2m\assets\flot\FlotAssetBase',
		'p2m\assets\flot\FlotCanvasAsset',
		'p2m\assets\flot\FlotCategoriesAsset',
		'p2m\assets\flot\FlotChartsAsset',
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
		'p2m\assets\FontAwesomeAsset',
		'p2m\assets\FullCalendarAsset',
		'p2m\assets\FullCalendarPrintAsset',
		'p2m\assets\GMapsApiAsset',
		'p2m\assets\GMapsAsset',
		'p2m\assets\HolderAsset',
		'p2m\assets\IsotopeAsset',
		'p2m\assets\JqueryAsset',
		'p2m\assets\JqueryCountToAsset',
		'p2m\assets\JqueryMigrateAsset',
		'p2m\assets\JSZipAsset',
		'p2m\assets\JuiAsset',
		'p2m\assets\Lightbox2Asset',
		'p2m\assets\MasonryAsset',
		'p2m\assets\MetisMenuAsset',
		'p2m\assets\MomentAsset',
		'p2m\assets\MomentTimezoneAsset',
		'p2m\assets\MorrisAsset',
		'p2m\assets\PdfMakeAsset',
		'p2m\assets\PrettyPhotoAsset',
		'p2m\assets\QunitAsset',
		'p2m\assets\RaphaelAsset',
		'p2m\assets\SweetAlertAsset',
		'p2m\assets\TimelineAsset',
		'p2m\assets\TimelineCssAsset',
		'p2m\assets\WowAsset',
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



# P2Y2 Assets

## ¡¡ Heads Up !!

This documentation page is skeletal & incomplete (& might not be perfectly accurate).

## Overrides

To override Bootstap & jQuery with CDN versions (which I recommend) include the following in your configuration...

```
<?php
return [
	...
	'components' => [
		'assetManager' => [
			...
			'bundles' => [
				'yii\bootstrap5\BootstrapAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/',
					'css' => [
						'css/bootstrap.min.css',
					],
					'cssOptions' => [
						'integrity' => 'sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH',
						'crossorigin' => 'anonymous',
					],
				],
				'yii\bootstrap5\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/',
					'js' => [
						'js/bootstrap.bundle.min.js',
					],
					'jsOptions' => [
						'integrity' => 'sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz',
						'crossorigin' => 'anonymous',
					],
				],
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//code.jquery.com/',
					'js' => [
						'jquery-3.7.1.min.js',
					],
					'jsOptions' => [
						'integrity' => 'sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs',
						'crossorigin' => 'anonymous',
					],
				],
			],
		],
		...
	],
];
```

## Assets

Asset | Resource | Depends
----- | -------- | -------
P2CoreAsset | Yii & Bootstrap | YiiAsset, BootstrapAsset
P2AmplitudejsAsset | [AmplitudeJS](https://521dimensions.com/open-source/amplitudejs) | P2CoreAsset
P2AnimateAsset | [Animate.css](https://animate.style/) | P2CoreAsset
P2BootstrapIconsAsset | [Bootstrap Icons](https://icons.getbootstrap.com/) | P2BootstrapIconsBaseAsset
P2Bs5Lightbox | [bs5-lightbox](https://github.com/trvswgnr/bs5-lightbox/) | P2CoreAsset
P2ChartJsAsset | [Chart.js](https://www.chartjs.org) | P2CoreAsset
P2CircleButtonsAsset | Circle Buttons | P2CoreAsset
P2DataTablesAutoFillAsset | [DataTables/Autofill](https://datatables.net) | P2DataTablesAutoFillBaseAsset
P2DataTablesBootstrap5Asset | [DataTables/Bootstrap5](https://datatables.net) | P2DataTablesBaseAsset
P2DataTablesButtonsAsset | [DataTables/Buttons](https://datatables.net) | P2DataTablesButtonsBaseAsset
P2DataTablesColReorderAsset | [DataTables/colReorder](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesColVisAsset | [DataTables/ColVis](https://datatables.net) | P2DataTablesButtonsAsset
P2DataTablesDateTimeAsset | [DataTables/dateTime](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesFixedColumnsAsset | [DataTables/fixedColumns](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesFixedHeaderAsset | [DataTables/fixedHeader](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesHtml5ExportAsset | [DataTables/html5](https://datatables.net) | P2DataTablesButtonsAsset
P2DataTablesJszipAsset | [DataTables/jszip](https://datatables.net) | P2DataTablesHtml5ExportAsset, P2JSZipAsset
P2DataTablesKeyTableAsset | [DataTables/keyTable](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesPdfmakeAsset | [DataTables/pdfmake](https://datatables.net) | P2DataTablesHtml5ExportAsset, P2PdfMakeAsset
P2DataTablesPrintAsset.php | [Yii2 asset for DataTables/print](https://datatables.net) | P2DataTablesButtonsAsset
P2DataTablesResponsiveAsset | [DataTables/Responsive](https://datatables.net) | P2DataTablesResponsiveBaseAsset
P2DataTablesRowGroupAsset | [DataTables/rowGroup](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesRowReorderAsset | [DataTables/rowReorder](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesScrollerAsset | [DataTables/scroller](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesSearchBuilderAsset | [DataTables/searchBuilder](https://datatables.net) | P2DataTablesSearchBuilderBaseAsset
P2DataTablesSearchPanesAsset | [DataTables/searchPanes](https://datatables.net) | P2DataTablesSearchPanesBaseAsset
P2DataTablesSelectAsset | [DataTables/select](https://datatables.net) | P2DataTablesBootstrap5Asset
P2DataTablesStateRestoreAsset | [DataTables/stateRestore](https://datatables.net) | P2DataTablesStateRestoreBaseAsset
P2DraggabillyAsset | [Draggabilly](https://draggabilly.desandro.com/) | P2CoreAsset
P2FitvidsAsset | [fitvids](https://github.com/rosszurowski/fitvids) | P2CoreAsset
P2FlagIconsAsset | [flag-icons](https://flagicons.lipis.dev/) | P2CoreAsset
P2FlickityAsset | [Flickity](https://flickity.metafizzy.co) | P2CoreAsset
P2FullCalendarBootstrap5Asset | [FullCalendar/Bootsrap5](https://fullcalendar.io) | P2FullCalendarBaseAsset
P2FullCalendarDaygridAsset | [FullCalendar/daygrid](https://fullcalendar.io/) | P2FullCalendarBootstrap5Asset
P2FullCalendarGoogleCalendarAsset | [FullCalendar/google-calendar](https://fullcalendar.io) | P2FullCalendarBootstrap5Asset
P2FullCalendarIcalendarAsset | [FullCalendar/icalendar](https://fullcalendar.io) | P2FullCalendarBootstrap5Asset
P2FullCalendarInteractionAsset | [FullCalendar/interaction](https://fullcalendar.io) | P2FullCalendarBootstrap5Asset
P2FullCalendarListAsset | [FullCalendar/list](https://fullcalendar.io/) | P2FullCalendarBootstrap5Asset
P2FullCalendarMomentAsset | [FullCalendar/moment](https://fullcalendar.io) | P2FullCalendarBootstrap5Asset
P2FullCalendarMomentTimezoneAsset | [FullCalendar/moment-timezone](https://fullcalendar.io) | P2FullCalendarBootstrap5Asset
P2FullCalendarMultimonthAsset | [FullCalendar/multimonth](https://fullcalendar.io/) | P2FullCalendarBootstrap5Asset
P2FullCalendarScrollgridAsset | [FullCalendar/scrollgrid](https://fullcalendar.io/) | P2FullCalendarBootstrap5Asset
P2FullCalendarTimegridAsset | [FullCalendar/timegrid](https://fullcalendar.io/) | P2FullCalendarBootstrap5Asset
P2GoogleMapsAsset | [google-maps](https://github.com/davidkudera/google-maps-loader/) | P2CoreAsset
P2HolderJsAsset | [Holder.js](http://holderjs.com) | P2CoreAsset
P2ImagesLoadedAsset | [imagesLoaded](https://imagesloaded.desandro.com) | P2CoreAsset
P2InfiniteScrollAsset | [Infinite Scroll](https://infinite-scroll.com/) | P2CoreAsset
P2IsotopeAsset | [Isotope](https://isotope.metafizzy.co) | P2CoreAsset
P2JqueryEasingAsset | [jQuery Easing](https://github.com/gdsmith/jquery.easing) | P2CoreAsset
P2JSZipAsset | [Jszip](https://github.com/Stuk/jszip) | P2CoreAsset
P2Lightbox2Asset | [LIGHTBOX](https://lokeshdhakar.com/projects/lightbox2/) | P2CoreAsset
P2MagnificPopupAsset | [Magnific Popup](https://dimsemenov.com/plugins/magnific-popup/) | P2CoreAsset
P2MasonryAsset | [Masonry](https://masonry.desandro.com) | P2CoreAsset
P2MathJsAsset | [Math.js](https://mathjs.org) | P2CoreAsset
P2MetisMenuAsset | [metisMenu](http://mm.onokumus.com) | P2CoreAsset
P2PackeryAsset | [Packery](https://packery.metafizzy.co) | P2CoreAsset
P2PdfMakeAsset | [pdfmake](http://pdfmake.org) | P2PdfmakeBaseAsset
P2QunitAsset | [QUnit](https://qunitjs.com) | P2CoreAsset
P2RaphaelAsset | [Raphaël](http://dmitrybaranovskiy.github.io/raphael/) | P2CoreAsset
P2ScrollRevealAsset | [ScrollReveal](https://scrollrevealjs.org) | P2CoreAsset
P2SimpleLineIconsAsset | [simple-line-icons](https://thesabbir.github.io/simple-line-icons/) | P2CoreAsset
P2SweetAlertAsset | [SweetAlert](https://sweetalert.js.org) | P2CoreAsset
P2TimelineAsset | timeline.css | P2CoreAsset
P2TimelineJs3Asset | [timelinejs3](https://timeline.knightlab.com/) | P2CoreAsset



## Notes

For usage of the asset resources see their web pages.

The `register` & `depends` lines for all assets are given as two blocks at the bottom of the page. Copy individual lines as required.

Register assets in views with:

```
p2m\assets\AssetNameAsset::register($this);
```

& specify as a dependancy in assets with:

```
	public $depends = [
		// ...
		'p2m\assets\AssetNameAsset',
		// ...
	];
```

## P2BootstrapIconsAsset

Loads [Bootstrap Icons](https://icons.getbootstrap.com/) with a small additional CSS to provide an icon for BlueSky.

The class for BlueSky is `bi-bluesky`. Use it like...

```
	<i class="bi bi-bluesky"></i>
```

## P2CircleButtonsAsset

Provides three additional classes for [Bootstrap](https://getbootstrap.com/docs/5.3/components/buttons/) buttons...

```
.btn-circle
.btn-circle.btn-lg
.btn-circle.btn-xl
```

Use them the same way you use other Bootstrap button classes...

```
<button type="button" class="btn-circle">Base class</button>
<button type="button" class="btn-circle btn-lg">Base class</button>
<button type="button" class="btn-circle btn-xl">Base class</button>

<a class="btn btn-circle" href="#" role="button">Link</a>
<a class="btn btn-circle btn-lg" href="#" role="button">Link</a>
<a class="btn btn-circle btn-xl" href="#" role="button">Link</a>
```

Circle Button classes can be combined with other Bootstrap buttons.

## P2JqueryEasingAsset

Loads [jquery.easing](https://github.com/gdsmith/jquery.easing/) for use as described in the jquery.easing docs.

## Register Lines

```
p2m\assets\P2CoreAsset::register($this);
p2m\assets\P2AmplitudejsAsset::register($this);
p2m\assets\P2AnimateAsset::register($this);
p2m\assets\P2BootstrapIconsAsset::register($this);
p2m\assets\P2Bs5Lightbox::register($this);
p2m\assets\P2ChartJsAsset::register($this);
p2m\assets\P2CircleButtonsAsset::register($this);
p2m\assets\P2DataTablesAutoFillAsset::register($this);
p2m\assets\P2DataTablesBootstrap5Asset::register($this);
p2m\assets\P2DataTablesButtonsAsset::register($this);
p2m\assets\P2DataTablesColReorderAsset::register($this);
p2m\assets\P2DataTablesColVisAsset::register($this);
p2m\assets\P2DataTablesDateTimeAsset::register($this);
p2m\assets\P2DataTablesFixedColumnsAsset::register($this);
p2m\assets\P2DataTablesFixedHeaderAsset::register($this);
p2m\assets\P2DataTablesHtml5ExportAsset::register($this);
p2m\assets\P2DataTablesJszipAsset::register($this);
p2m\assets\P2DataTablesKeyTableAsset::register($this);
p2m\assets\P2DataTablesPdfmakeAsset::register($this);
p2m\assets\P2DataTablesPrintAsset::register($this);
p2m\assets\P2DataTablesResponsiveAsset::register($this);
p2m\assets\P2DataTablesRowGroupAsset::register($this);
p2m\assets\P2DataTablesRowReorderAsset::register($this);
p2m\assets\P2DataTablesScrollerAsset::register($this);
p2m\assets\P2DataTablesSearchBuilderAsset::register($this);
p2m\assets\P2DataTablesSearchPanesAsset::register($this);
p2m\assets\P2DataTablesSelectAsset::register($this);
p2m\assets\P2DataTablesStateRestoreAsset::register($this);
p2m\assets\P2DraggabillyAsset::register($this);
p2m\assets\P2FitvidsAsset::register($this);
p2m\assets\P2FlagIconsAsset::register($this);
p2m\assets\P2FlickityAsset::register($this);
p2m\assets\P2FullCalendarBootstrap5Asset::register($this);
p2m\assets\P2FullCalendarDaygridAsset::register($this);
p2m\assets\P2FullCalendarGoogleCalendarAsset::register($this);
p2m\assets\P2FullCalendarIcalendarAsset::register($this);
p2m\assets\P2FullCalendarInteractionAsset::register($this);
p2m\assets\P2FullCalendarListAsset::register($this);
p2m\assets\P2FullCalendarMomentAsset::register($this);
p2m\assets\P2FullCalendarMomentTimezoneAsset::register($this);
p2m\assets\P2FullCalendarMultimonthAsset::register($this);
p2m\assets\P2FullCalendarScrollgridAsset::register($this);
p2m\assets\P2FullCalendarTimegridAsset::register($this);
p2m\assets\P2GoogleMapsAsset::register($this);
p2m\assets\P2HolderJsAsset::register($this);
p2m\assets\P2ImagesLoadedAsset::register($this);
p2m\assets\P2InfiniteScrollAsset::register($this);
p2m\assets\P2IsotopeAsset::register($this);
p2m\assets\P2JqueryEasingAsset::register($this);
p2m\assets\P2JSZipAsset::register($this);
p2m\assets\P2Lightbox2Asset::register($this);
p2m\assets\P2MagnificPopupAsset::register($this);
p2m\assets\P2MasonryAsset::register($this);
p2m\assets\P2MathJsAsset::register($this);
p2m\assets\P2MetisMenuAsset::register($this);
p2m\assets\P2MorrisAsset::register($this);
p2m\assets\P2PackeryAsset::register($this);
p2m\assets\P2PdfMakeAsset::register($this);
p2m\assets\P2QunitAsset::register($this);
p2m\assets\P2RaphaelAsset::register($this);
p2m\assets\P2ScrollRevealAsset::register($this);
p2m\assets\P2SimpleLineIconsAsset::register($this);
p2m\assets\P2SweetAlertAsset::register($this);
p2m\assets\P2TimelineAsset::register($this);
p2m\assets\P2TimelineJs3Asset::register($this);
p2m\assets\P2WowAsset::register($this);
```

## Depends Lines

```
		'p2m\assets\P2CoreAsset',
		'p2m\assets\P2AmplitudejsAsset',
		'p2m\assets\P2AnimateAsset',
		'p2m\assets\P2BootstrapIconsAsset',
		'p2m\assets\P2Bs5Lightbox',
		'p2m\assets\P2ChartJsAsset',
		'p2m\assets\P2CircleButtonsAsset',
		'p2m\assets\P2DataTablesAutoFillAsset',
		'p2m\assets\P2DataTablesBootstrap5Asset',
		'p2m\assets\P2DataTablesButtonsAsset',
		'p2m\assets\P2DataTablesColReorderAsset',
		'p2m\assets\P2DataTablesColVisAsset',
		'p2m\assets\P2DataTablesDateTimeAsset',
		'p2m\assets\P2DataTablesFixedColumnsAsset',
		'p2m\assets\P2DataTablesFixedHeaderAsset',
		'p2m\assets\P2DataTablesHtml5ExportAsset',
		'p2m\assets\P2DataTablesJszipAsset',
		'p2m\assets\P2DataTablesKeyTableAsset',
		'p2m\assets\P2DataTablesPdfmakeAsset',
		'p2m\assets\P2DataTablesPrintAsset',
		'p2m\assets\P2DataTablesResponsiveAsset',
		'p2m\assets\P2DataTablesRowGroupAsset',
		'p2m\assets\P2DataTablesRowReorderAsset',
		'p2m\assets\P2DataTablesScrollerAsset',
		'p2m\assets\P2DataTablesSearchBuilderAsset',
		'p2m\assets\P2DataTablesSearchPanesAsset',
		'p2m\assets\P2DataTablesSelectAsset',
		'p2m\assets\P2DataTablesStateRestoreAsset',
		'p2m\assets\P2DraggabillyAsset',
		'p2m\assets\P2FitvidsAsset',
		'p2m\assets\P2FlagIconsAsset',
		'p2m\assets\P2FlickityAsset',
		'p2m\assets\P2FullCalendarBootstrap5Asset',
		'p2m\assets\P2FullCalendarDaygridAsset',
		'p2m\assets\P2FullCalendarGoogleCalendarAsset',
		'p2m\assets\P2FullCalendarIcalendarAsset',
		'p2m\assets\P2FullCalendarInteractionAsset',
		'p2m\assets\P2FullCalendarListAsset',
		'p2m\assets\P2FullCalendarMomentAsset',
		'p2m\assets\P2FullCalendarMomentTimezoneAsset',
		'p2m\assets\P2FullCalendarMultimonthAsset',
		'p2m\assets\P2FullCalendarScrollgridAsset',
		'p2m\assets\P2FullCalendarTimegridAsset',
		'p2m\assets\P2GoogleMapsAsset',
		'p2m\assets\P2HolderJsAsset',
		'p2m\assets\P2ImagesLoadedAsset',
		'p2m\assets\P2InfiniteScrollAsset',
		'p2m\assets\P2IsotopeAsset',
		'p2m\assets\P2JqueryEasingAsset',
		'p2m\assets\P2JSZipAsset',
		'p2m\assets\P2Lightbox2Asset',
		'p2m\assets\P2MagnificPopupAsset',
		'p2m\assets\P2MasonryAsset',
		'p2m\assets\P2MathJsAsset',
		'p2m\assets\P2MetisMenuAsset',
		'p2m\assets\P2MorrisAsset',
		'p2m\assets\P2PackeryAsset',
		'p2m\assets\P2PdfMakeAsset',
		'p2m\assets\P2QunitAsset',
		'p2m\assets\P2RaphaelAsset',
		'p2m\assets\P2ScrollRevealAsset',
		'p2m\assets\P2SimpleLineIconsAsset',
		'p2m\assets\P2SweetAlertAsset',
		'p2m\assets\P2TimelineAsset',
		'p2m\assets\P2TimelineJs3Asset',
		'p2m\assets\P2WowAsset',
```

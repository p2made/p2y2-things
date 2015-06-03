P2Y2Things v1.0.2
=================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

This package replaces my yii2-asset-collection, including in all my other projects which had yii2-asset-collection as a dependancy.

[Assets](./docs/Assets.md)

Installation
------------

The preferred way to install p2y2-things is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-p2y2-things "2.*"
```

or

```
php composer.phar require p2made/yii2-p2y2-things "2.*"
```

Alternatively add:

```
	"p2made/yii2-p2y2-things": "2.*"
```

to the requires section of your `composer.json` file & p2y2-things will be installed next time you run `composer update`.

Usage
-----

First add these lines to the `params` section of your config file.

```php
	'p2assets' => [
		'useCdn' => true, // false or not set to use published assets
	],
```

You can substitute any of the themes from [Bootswatch](http://bootswatch.com) by setting:

```php
	'p2assets' => [
		...
		'bwTheme' = 'cerulean',

	],
```

Using one of: `'cerulean'`, `'cosmo'`, `'cyborg'`, `'darkly'`, `'flatly'`, `'journal'`, `'lumen'`, `'paper'`, `'readable'`, `'sandstone'`, `'simplex'`, `'slate'`, `'spacelab'`, `'superhero'`, `'united'`, `'yeti'`.


Register assets in views with:

```php
p2made\assets\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```php
	public $depends = [
		// ...
		'p2made\assets\AssetNameAsset',
		// ...
	];
```

The `register` lines for all assets...

```php
p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\BootstrapSweetalertAsset::register($this);
p2made\assets\BootstrapSwitchAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FlagIconCssAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\JqueryMigrateAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\WowAsset::register($this);
p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);
```

& the dependency lines for all assets...

```php
		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\BootstrapSweetalertAsset',
		'p2made\assets\BootstrapSwitchAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FlagIconCssAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\JqueryMigrateAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\WowAsset',
		'p2made\assets\Html5shivAsset',
		'p2made\assets\PrintShivAsset',
```

For usage of the asset resources see their web pages.

Sources
-------

In order of preference, the following sources are used for published assets...

- a trusted `composer` package as a dependancy
- a trusted `bower` package as a dependancy
- a trusted `npm` package as a dependancy
- downloaded files included in this package

In order of preference, the CDNs used are...

- vendor CDN
- [cdnjs](https://cdnjs.com/)
- [jsDelivr](http://www.jsdelivr.com/)

Very occasionally the CDN version of a resource may be a little behind the published version.




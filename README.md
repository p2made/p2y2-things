P2Y2Things v4.0.0-rc1
==========

[![License](https://poser.pugx.org/p2made/yii2-p2y2-things/license)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Total Downloads](https://poser.pugx.org/p2made/yii2-p2y2-things/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Monthly Downloads](https://poser.pugx.org/p2made/yii2-p2y2-things/d/monthly)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Unstable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things)

---

A collection of resources as Assets, Helpers, & Widgets for Yii2.

Version 4 is so numbered because I've migrated P2Y2Things to using Bootstrap v4.

Highlights
----------

### [P2Y2 Assets](docs/Assets.md)

A kitchen-sink full of CSS & JS resources wrapped as Yii2 AssetBundles. These are just convenient ways to load a bunch of CSS & JS goodies. There's also an option for getting assets from official CDNs.

### [Bootstrap Social Asset Bundle & Helpers](docs/BootstrapSocial.md)

The [Bootstrap Social](http://lipis.github.io/bootstrap-social/) asset from P2Y2 Assets, with helpers inspired by @rmrevin's [yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome).

Credit to @lipis for Bootstrap Social.

### [FlagIconCss Asset Bundle & Helpers](docs/FlagIconCss.md)

The [flag-icon-css](http://lipis.github.io/flag-icon-css/) asset from P2Y2 Assets, with helpers inspired by @rmrevin's [yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome).

Credit to @lipis for Bootstrap Social.

### [IsGd Helper](docs/IsGdHelper.md)

A simple wrapper of [is.gd](http://is.gd) as a helper for Yii 2 Framework.

### [Uuid Helpers](docs/UuidHelpers.md)

A simple wrapper of [ramsey/uuid](https://github.com/ramsey/uuid) as helpers for Yii 2 Framework.

Credit to @ramsey for ramsey/uuid, which provides all the UUID magic here.

Installation
------------

The preferred way to install P2Y2Things is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
	composer require p2made/yii2-p2y2-things "^2.8"
```

or

```
	php composer.phar require p2made/yii2-p2y2-things "^2.8"
```

Alternatively add:

```
	"p2made/yii2-p2y2-things": "^2.8"
```

to the requires section of your `composer.json` file & P2Y2Things will be installed next time you run `composer update`.

And then...
-----------

If you're using P2Y2Things you'll want to nullify some of the Yii 2 assets, to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
		...
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		...
	],
```

P2Y2Things gives you the option of loading assets from the official CDNs. Just put this into `common/config/params.php`...

```
	'p2m' => [
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
		],
	],
```

When things are set up to your liking, register the `P2CoreAsset` with...

```
	p2m\assets\P2CoreAsset::register($this);
```

...&  you get
* `Jquery` (as `p2m\assets\JqueryAsset`),
* `yii\web\YiiAsset` (as `p2m\assets\P2YiiAsset`),
* `Bootstrap` (as `p2m\assets\BootstrapAsset`), &
* `Font Awesome` (as `p2m\assets\FontAwesomeAsset`)

nicely loaded in one line.

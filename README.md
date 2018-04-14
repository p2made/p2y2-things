P2Y2Things v2.8.1
==========

[![License](https://poser.pugx.org/p2made/yii2-p2y2-things/license)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Total Downloads](https://poser.pugx.org/p2made/yii2-p2y2-things/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Monthly Downloads](https://poser.pugx.org/p2made/yii2-p2y2-things/d/monthly)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Unstable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Dependency Status](https://www.versioneye.com/user/projects/56de5856df573d00352c66c0/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56de5856df573d00352c66c0)

---

A collection of resources as Assets, Helpers, & Widgets for Yii2.

v3.0.0
======

I'm currently working on v3.0.0 with a variety of major changes to be detailed in updates to this file.

¡¡ IMPORTANT !!
===============

Version 2.0.0 & beyond of all my Yii2 add-ons mark a breaking change where I've shortened my namespaces.
	`p2made\rest\of\namespace` is now `p2m\rest\of\namespace`.

Version 2.5.1 fixes a serious bug that had `yii.js` loading before jQuery.

Version 2.6.0 is a bigger version bump to more firmly enforce loading of the fix in version 2.5.1.

Version 2.7.0 tweaks all assets to further ensure safe loading order.

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

### [Font Awesome Asset Bundle & Helpers](docs/FontAwesome.md)

It began as a wrapper on [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome), merely for the convenience of having Font Awesome on the p2made namespace... & then it grew...

I love the elegance & cleverness of the recursive methods in @rmrevin's classes, however the syntax starts beautifully concise for basic icons, but becomes much longer as attributes are added. I've added a few shortcuts that reduce common combinations to method names of 2 or 3 letters.

Credit to @rmrevin for FontAwesome.

### [Glyphicons Asset Bundle & Helpers](docs/Glyphicons.md)

This extension wraps Bootstrap Glyphicons in a manner similar to [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome).

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

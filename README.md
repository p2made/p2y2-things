P2Y2Things v1.6.0
=================

[![License](https://poser.pugx.org/p2made/yii2-p2y2-things/license)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Total Downloads](https://poser.pugx.org/p2made/yii2-p2y2-things/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Unstable Version](https://poser.pugx.org/p2made/yii2-p2y2-things/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things)

---

A collection of resources as Assets, Helpers, & Widgets for Yii2.

This package replaces my yii2-asset-collection, including in all my other projects which had yii2-asset-collection as a dependancy.

Installation
------------

The preferred way to install P2Y2Things is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-p2y2-things "*"
```

or

```
php composer.phar require p2made/yii2-p2y2-things "*"
```

Alternatively add:

```
	"p2made/yii2-p2y2-things": "*"
```

to the requires section of your `composer.json` file & P2Y2Things will be installed next time you run `composer update`.

And then...
-----------

If you're using P2Y2Things you'll want to nullify some of the Yii 2 assets, to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
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
	'p2made' => [
		'useStatic' => true, // false or not set to use published assets
	],
```

Assets
------

A kitchen-sink full of CSS & JS resources wrapped as Yii2 AssetBundles. See [assets documentation](docs/P2Y2Assets.md) for detail & usage.

Helpers
-------

Helper | Description
------ | -----------
[BSocial](docs/BSocial.md) | Wrapping [Bootstrap Social](http://lipis.github.io/bootstrap-social/) as helpers for Yii2.
[IsGd](docs/IsGd.md) | Wrapping [is.gd](http://is.gd) as helpers for Yii2.
[Uuid](docs/Uuid.md) | Wrapping [ramsey/uuid](https://github.com/ramsey/uuid) as helpers for Yii2.

---
[![Dependency Status](https://www.versioneye.com/user/projects/56de5856df573d00352c66c0/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56de5856df573d00352c66c0)

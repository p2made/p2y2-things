# P2Y2Things 5.0.0

[![License](https://poser.pugx.org/p2made/p2y2-things/license)](https://packagist.org/packages/p2made/p2y2-things)
[![Total Downloads](https://poser.pugx.org/p2made/p2y2-things/downloads)](https://packagist.org/packages/p2made/p2y2-things)
[![Monthly Downloads](https://poser.pugx.org/p2made/p2y2-things/d/monthly)](https://packagist.org/packages/p2made/p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/p2y2-things/v/stable)](https://packagist.org/packages/p2made/p2y2-things)
[![Latest Unstable Version](https://poser.pugx.org/p2made/p2y2-things/v/unstable)](https://packagist.org/packages/p2made/p2y2-things)

---

# ¡¡ Notice !!

After an extented period of life getting in the way I'm back to [Yii2](https://www.yiiframework.com/) development. I'll be rebasing every project as I resume work on it. Projects that use [Bootstrap](https://getbootstrap.com/) will resume as version `5.0.0` for Bootstrap 5.x.

2025-03-31 - As part of the rebase I am making a release `5.x-reboot` as soon as I commit this update to the README. I will then set almost all classes aside pending review. If `master`, `dev`, or the most recent release is missing something that you require, use `5.x-reboot` until that part is reinstated.

---

A collection of resources as Assets, Helpers, & Widgets for Yii2.

Version 5 is so numbered because I've migrated P2Y2Things to using Bootstrap v5.

# Installation

The preferred way to install P2Y2Things is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
	composer require p2made/p2y2-things "dev-master"
```

or

```
	php composer.phar require p2made/p2y2-things "dev-master"
```

Alternatively add:

```
	"p2made/p2y2-things": "dev-master"
```

to the requires section of your `composer.json` file & P2Y2Things will be installed next time you run `composer update`.

# Highlights

### [P2Y2 Assets](docs/Assets.md)

A kitchen-sink full of CSS & JS resources wrapped as Yii2 AssetBundles. These are convenient ways to load a bunch of CSS & JS goodies. These assets use official CDNs whenever possible.

--



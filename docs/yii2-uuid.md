P2Uuid v3.0.1
=============

A simple wrapper of [ramsey/uuid](https://github.com/ramsey/uuid) as helpers for Yii 2 Framework.

Version 3 brings P2Uuid into sync with version 3 of ramsey/uuid.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist p2made/yii2-uuid ">=3.0.0"
```

or add

```
"p2made/yii2-uuid": ">=3.0.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code with:

```
	$uuid = \p2made\helpers\Uuid\UuidHelpers::uuid();
	$uuid = \p2made\helpers\Uuid\UuidHelpers::uuid($subDomain);
```

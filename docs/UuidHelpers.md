Uuid Helper
===========

A simple wrapper of [ramsey/uuid](https://github.com/ramsey/uuid) as helpers for Yii 2 Framework.

Version 3 brings P2Uuid into sync with version 3 of ramsey/uuid.

Credit to @ramsey for ramsey/uuid, which provides all the UUID magic here.

Usage
-----

Once P2Y2Things is installed, you can use Uuid in your code with...

```
	use p2made\helpers\Uuid;
	...
	echo Uuid::uuid($subDomain = self::SUBDOMAIN_DEFAULT);
	echo Uuid::p2uuid1();
	echo Uuid::p2uuid3($subDomain = self::SUBDOMAIN_UUID);
	echo Uuid::p2uuid4();
	echo Uuid::p2uuid5($subDomain = self::SUBDOMAIN_UUID);
```
or...

```
	echo \p2made\helpers\Uuid::uuid($subDomain = self::SUBDOMAIN_DEFAULT);
	echo \p2made\helpers\Uuid::p2uuid1();
	echo \p2made\helpers\Uuid::p2uuid3($subDomain = self::SUBDOMAIN_UUID);
	echo \p2made\helpers\Uuid::p2uuid4();
	echo \p2made\helpers\Uuid::p2uuid5($subDomain = self::SUBDOMAIN_UUID);
```
 In general, the first is best when using Uuid multiple time in the one file, and the 2nd is better when using Uuid only once in a file.

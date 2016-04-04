IsGd Helper
===========

A simple wrapper of [is.gd](http://is.gd) as a helper for Yii 2 Framework.

Usage
-----

Once P2Y2Things is installed, you can use IsGd in your code with...

```
	use p2made\helpers\IsGd;
	...
	echo IsGd::shortenUrl($inputUrl);
	echo IsGd::checkInput($inputUrl);
	echo IsGd::checkResult($shortenedUrl);
```
or...

```
	echo \p2made\helpers\IsGd::shortenUrl($inputUrl);
	echo \p2made\helpers\IsGd::checkInput($inputUrl);
	echo \p2made\helpers\IsGd::checkResult($shortenedUrl);
```
 In general, the first is best when using IsGd multiple time in the one file, and the 2nd is better when using IsGd only once in a file.
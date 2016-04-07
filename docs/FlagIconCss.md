FlagIconCss Asset Bundle & Helpers
==================================

This extension provides an asset bundle with [flag-icon-css](http://lipis.github.io/flag-icon-css/) for [Yii 2](http://www.yiiframework.com/) applications and helper to use icons.

Credit to @lipis for Bootstrap Social.

Usage
-----

Once P2Y2Things is installed, here's how you use Flag Icons in your code.

First register the asset bundle where you want to use Flag Icons...

```
	p2made\assets\FlagIconCssAsset::register($this);
```

or specify as a dependency in another asset bundle loaded to the same page with...

```
	'p2made\assets\FlagIconCssAsset',
```

Also include `use p2made\helpers\FI;` at the top of the page.

Now your page is ready for Flag Icons!

Class reference
---------------

###Namespace: `p2made\helpers`;

###Class `FI`

#### icon methods


* `static FI::i($name, $options = [])` - Creates a Flag component as an i tag
  * `$name` - name of icon in Font Awesome set.
  * `$options` - additional attributes for the html tag.
* `static FI::span($name, $options = [])` - Creates a Flag component as a span tag
  * `$name` & `$options` - as above.
* `static FI::div($name, $options = [])` - Creates a Flag component as a div tag
  * `$name` & `$options` - as above.

* `Flag->square()` - Creates a squared flag icon
* `Flag->title($value = null)` - Adds title attribute
  * If no value is passed, the flag identifier is used as title.
* `Flag->id($value = null)` - Flag->id()
  * If no value is passed, the flag identifier is used as id.

* `static FI::square($name, $options = [])` - Shortcut for ::i()->square()
  * Creates a _square_ Flag component as an i tag
  * `$name` & `$options` - as above.

* `static FI::iTitle($name, $options = [])` - Shortcut for FI::i()->title() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::spanTitle($name, $options = [])` - Shortcut for FI::span()->title() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::divTitle($name, $options = [])` - Shortcut for FI::div()->title() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::iId($name, $options = [])` - Shortcut for FI::i()->id() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::spanId($name, $options = [])` - Shortcut for FI::span()->id() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::divId($name, $options = [])` - Shortcut for FI::div()->id() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::iTitleId($name, $options = [])` - Shortcut for i()->title()->id() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::spanTitleId($name, $options = [])` - Shortcut for span()->title()->id() with no `$value` passed
  * `$name` & `$options` - as above.
* `static FI::divTitleId($name, $options = [])` - Shortcut for div()->title()->id() with no `$value` passed
  * `$name` & `$options` - as above.


See the example page in [`yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) for usage examples.

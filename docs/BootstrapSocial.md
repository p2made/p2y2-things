BSocial Asset Bundle & Helpers
==============================

This extension provides an asset bundle with [Bootstrap Social](http://lipis.github.io/bootstrap-social/) for [Yii 2](http://www.yiiframework.com/) applications and helper to use icons.

I wanted to reduce the class name to two letters, like FA in [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome), but (in English at least) the result isn't good.

Credit to @lipis for Bootstrap Social.

Usage
-----

Once P2Y2Things is installed, here's how you use BSocial in your code.

First register the asset bundle where you want to use BSocial...

```
	p2made\assets\BootstrapSocialAsset::register($this);
```

or specify as a dependency in another asset bundle loaded to the same page with...

```
	'p2made\assets\BootstrapSocialAsset',
```

Also include `use p2made\helpers\BSocial;` at the top of the page.

Now your page is ready for Bootstrap Social!

Class reference
---------------

###Namespace: `p2made\helpers`;

###Class `BSocial`

####`a` tag methods

* `static BSocial::a($name, $options=[])` - Creates an anchor tag `SocialButton` and inserts it.
  * `$name` - name of icon in Bootstrap Social set.
  * `$options` - additional attributes for the html tag.
* `static BSocial::a($name, $options=[])->icon()` - Creates an anchor tag `SocialButton`, as an icon only, and inserts it.
* `static BSocial::aIcon($name, $options=[])` - an alias of `static BSocial::a($name, $options=[])->icon()`.
* `static BSocial::a($name, $options=[])->noBlock()` - Creates an anchor tag `SocialButton`, without the `btn-block` class, and inserts it.
* `static BSocial::aNoBlock($name, $options=[])` - an alias of `static BSocial::a($name, $options=[])->noBlock()`.
* `static BSocial::a($name, $options=[])->caption('your custom caption')` - Creates an anchor tag `SocialButton`, using your custom caption, and inserts it. The social service name will replace '@@@' (without the quotes) in your custom caption.
* `static BSocial::a($name, $options=[])->size($size)` - Creates an anchor tag `SocialButton`, at the size specified. Valid values for `$size` are `lg` (Bootstrap large), `sm` (Bootstrap small), and `xs` (Bootstrap extra small).

####`button` tag methods

* `static BSocial::button($name, $options=[])` - Creates a button tag `SocialButton` and inserts it.
  * `$name` - name of icon in Bootstrap Social set.
  * `$options` - additional attributes for the html tag.
* `static BSocial::button($name, $options=[])->icon()` - Creates a button tag `SocialButton`, as an icon only, and inserts it.
* `static BSocial::buttonIcon($name, $options=[])` - an alias of `static BSocial::a($name, $options=[])->icon()`.
* `static BSocial::button($name, $options=[])->noBlock()` - Creates a button tag `SocialButton`, without the `btn-block` class, and inserts it.
* `static BSocial::buttonNoBlock($name, $options=[])` - an alias of `static BSocial::a($name, $options=[])->noBlock()`.
* `static BSocial::button($name, $options=[])->caption('your custom caption')` - Creates a button tag `SocialButton`, using your custom caption, and inserts it. The social service name will replace '@@@' (without the quotes) in your custom caption.
* `static BSocial::button($name, $options=[])->size($size)` - Creates a button tag `SocialButton`, at the size specified. Valid values for `$size` are `lg` (Bootstrap large), `sm` (Bootstrap small), and `xs` (Bootstrap extra small).

You can freely combine `noBlock()`, `caption()`, and `size()`...

* `static BSocial::a($name, $options=[])->noBlock()->caption('Use @@@ to sign in to my awesome site!')`
* `static BSocial::buttonNoBlock($name, $options=[])->size('lg')->caption('Use @@@ to sign in to my awesome site!')`

You can also combine `icon()` and `size()`.

* `static BSocial::aIcon($name, $options=[])->size('sm')`
* `static BSocial::button($name, $options=[])->icon()->size('xs')`

*__¡¡¡ WARNING !!!__* It makes no sense to combine `icon()` with either `noBlock()` or `caption()`.

See the example page in [`yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) for usage examples.



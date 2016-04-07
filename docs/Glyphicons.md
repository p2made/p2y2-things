Glyphicons Asset Bundle & Helpers
==================================

This extension wraps Bootstrap Glyphicons in a manner similar to [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome).

Usage
-----

Once P2Y2Things is installed, here's how you use Glyphicons in your code.

There's no need to register any assets, because Bootstrap, which Glyphicons is part of, is already loaded.

Include `use p2made\helpers\GI;` at the top of the page.

Now your page is ready for Glyphicons!

Class reference
---------------

###Namespace: `p2made\helpers`;

###Class `GI`

#### icon methods

* `static GI::i($name, $options = [])` - Creates a Glyphicon component as an i tag
  * `$name` - name of icon in Font Awesome set.
  * `$options` - additional attributes for the html tag.
* `static GI::span($name, $options = [])` - Creates a Glyphicon component as an i tag
  * `$name` & `$options` - as above.
* `static GI::fw($name, $options = [])` - Creates a Glyphicon component as an i tag
  * `$name` & `$options` - as above.
* `static GI::sfw($name, $options = [])` - Creates a Glyphicon component as an i tag
  * `$name` & `$options` - as above.

#### & more to come.

See the example page in [`yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) for usage examples.

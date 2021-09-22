<?php
/**
 * P2CoreJsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2CoreJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2CoreJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2CoreJsAsset',
 */

namespace p2m\assets;

class P2CoreJsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $js = [
		//'js' => ['js/p2additions.js']
	];

	public $depends = [
		'p2m\assets\base\P2BootstrapJsAsset',
		'p2m\assets\base\P2YiiAsset',
	];
}

/* dependency lines for all assets... */
/**
		'p2m\assets\_ExampleAsset',
		'p2m\assets\AnimateAsset',
 */

/* register lines for all assets... */
/**
p2m\assets\_ExampleAsset::register($this);
p2m\assets\AnimateAsset::register($this);
 */

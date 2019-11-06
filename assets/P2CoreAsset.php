<?php
/**
 * P2CoreAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2CoreAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2CoreAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2CoreAsset',
 */

namespace p2m\assets;

class P2CoreAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css' => ['css/p2additions.css']
	];

	public $js = [
		'js' => ['js/p2additions.js']
	];

	public $depends = [
		'p2m\assets\base\P2BootstrapAsset',
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

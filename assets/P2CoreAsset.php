<?php
/**
 * P2CoreAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2CoreAsset
 */

/**
 * Load this asset with...
p2m\assets\P2CoreAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2CoreAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2CoreAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css/p2additions.min.css',
	];

	/**
	public $js = [
		'js/p2additions.min.js',
	];
	 */

	public $depends = [
		'yii\web\YiiAsset',
		//'yii\bootstrap5\BootstrapAsset',
	];
}

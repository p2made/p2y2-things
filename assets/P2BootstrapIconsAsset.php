<?php
/**
 * P2BootstrapIconsAsset.php
 *
 * Yii2 asset with additions for Bootstrap Icons
 * https://icons.getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootstrapIconsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2BootstrapIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2BootstrapIconsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootstrapIconsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css/bootstrap-icons.min.css',
	];

	public $depends = [
		'p2m\assets\base\P2BootstrapIconsBaseAsset',
	];
}

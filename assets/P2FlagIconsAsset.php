<?php
/**
 * P2FlagIconsAsset.php
 *
 * Yii2 asset for flag-icons
 * https://flagicons.lipis.dev/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FlagIconsAsset
 */

/**
 * Load this asset with...
p2m\assets\P2FlagIconsAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2FlagIconsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FlagIconsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css/flag-icons.min.css',
	];

	public $depends = [
		'p2m\assets\base\P2FlagIconsBaseAsset',
	];
}

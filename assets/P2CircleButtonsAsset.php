<?php
/**
 * P2CircleButtonsAsset.php
 *
 * Yii2 asset for Circle Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2CircleButtonsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2CircleButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2CircleButtonsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2YiiAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css/circle-buttons.min.css = [
		'css/circle-buttons.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

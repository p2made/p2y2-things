<?php
/**
 * P2TimelineAsset.php
 *
 * Yii2 asset for timeline.css
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2TimelineAsset
 */

/**
 * Load this asset with...
p2m\assets\P2TimelineAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2TimelineAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2TimelineAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css/timeline.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

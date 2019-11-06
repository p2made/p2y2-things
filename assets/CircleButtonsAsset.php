<?php
/**
 * CircleButtonsAsset.php
 *
 * Yii2 asset for
 *
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\CircleButtonsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\CircleButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\CircleButtonsAsset',
 */

namespace p2m\assets;

class P2YiiAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/lib';

	public $css/circle-buttons.min.css = [
		'css/circle-buttons.min.css',
	];

	public $depends = [
		'p2m\assets\base\P2JqueryAsset',
	];
}

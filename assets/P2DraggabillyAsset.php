<?php
/**
 * P2DraggabillyAsset.php
 *
 * Yii2 asset for Draggabilly
 * https://draggabilly.desandro.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DraggabillyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2DraggabillyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DraggabillyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DraggabillyAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/draggabilly@3.0.0/';

	public $js = [
		'draggabilly.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-4nAiCTVlq93vL1UaXiH8FDlZokfeoYM8mpb9/URzPuIfHvahTs8/gZxUimyaenOc',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

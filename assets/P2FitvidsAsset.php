<?php
/**
 * P2FitvidsAsset.php
 *
 * Yii2 asset for fitvids
 * https://github.com/rosszurowski/fitvids
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FitvidsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2FitvidsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2FitvidsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2FitvidsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/fitvids@2.1.1/dist';

	public $js = [
		'fitvids.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-pvPfbSUpzlFoHkZbg7/qApej+2X2J7wWT87ey6rcegw=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

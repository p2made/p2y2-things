<?php
/**
 * P2SimpleDatatablesAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2SimpleDatatablesAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2SimpleDatatablesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2SimpleDatatablesAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SimpleDatatablesAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/simple-datatables@10.0.0/dist';

	public $css = [
		'style.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-QDiWEIOYivjFEI0WQwdwihzwG9nJGKFWXiRh4dr5ito=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'umd/simple-datatables.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-XMVx+UH21h8TkoCUMPmVwxu0IxIlINjmJu7j/itA8jI=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

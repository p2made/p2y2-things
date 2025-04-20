<?php
/**
 * P2PackeryAsset.php
 *
 * Yii2 asset for Packery
 * https://packery.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2PackeryAsset
 */

/**
 * Load this asset with...
p2m\assets\P2PackeryAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2PackeryAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2PackeryAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/packery@3.0.0/dist';

	public $js = [
		'packery.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-+T5XoE+yz+3zat/fq4Wo6NR0WZ9E7BTYDmTmZ8uhcTg=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

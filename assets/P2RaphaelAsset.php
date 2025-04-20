<?php
/**
 * P2RaphaelAsset.php
 *
 * Yii2 asset for Raphaël
 * http://dmitrybaranovskiy.github.io/raphael/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2RaphaelAsset
 */

/**
 * Load this asset with...
p2m\assets\P2RaphaelAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2RaphaelAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2RaphaelAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/raphael@2.3.0';

	public $js = [
		'raphael.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-TabprKdeNXbSesCWLMrcbWSDzUhpAdcNPe5Q53rn9Yg=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

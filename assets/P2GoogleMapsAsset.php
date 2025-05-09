<?php
/**
 * P2GoogleMapsAsset.php
 *
 * Yii2 asset for google-maps
 * https://github.com/davidkudera/google-maps-loader/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2GoogleMapsAsset
 */

/**
 * Load this asset with...
p2m\assets\P2GoogleMapsAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2GoogleMapsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2GoogleMapsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/google-maps@4.3.3/lib/cjs';

	public $js = [
		'index.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-2YA/ncVUAX1mcjio2qPF2VhAIqe/RWdKXGWWs3o/+vM=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

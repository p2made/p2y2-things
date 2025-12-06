<?php
/**
 * P2BootstrapPluginAsset.php
 *
 * Yii2 asset with additions for Bootstrap Plugin
 * https://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootstrapPluginAsset
 */

/**
 * Load this asset with...
p2m\assets\P2BootstrapPluginAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2BootstrapPluginAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootstrapPluginAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist';

	public $js = [
		'js/bootstrap.bundle.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

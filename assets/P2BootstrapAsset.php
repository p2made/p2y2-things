<?php
/**
 * P2BootstrapAsset.php
 *
 * Yii2 asset with additions for Bootstrap
 * https://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootstrapAsset
 */

/**
 * Load this asset with...
p2m\assets\P2BootstrapAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2BootstrapAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootstrapAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist';

	public $css = [
		'css/bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}

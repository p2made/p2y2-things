<?php
/**
 * P2BootstrapIconsAsset.php
 *
 * Yii2 asset with additions for Bootstrap Icons
 * https://icons.getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootstrapIconsAsset
 */

/**
 * Load this asset with...
p2m\assets\P2BootstrapIconsAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2BootstrapIconsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootstrapIconsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font';

	public $css = [
		'bootstrap-icons.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-CK2SzKma4jA5H/MXDUU7i1TqZlCFaD4T01vtyDFvPlD97JQyS+IsSh1nI2EFbpyk',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

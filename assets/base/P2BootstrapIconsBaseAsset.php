<?php
/**
 * base/P2BootstrapIconsBaseAsset.php
 *
 * Yii2 asset for Bootstrap Icons
 * https://icons.getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapIconsBaseAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2BootstrapIconsBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapIconsBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2BootstrapIconsBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font';

	public $css = [
		'bootstrap-icons.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2BootstrapSocialAsset.php
 *
 * Yii2 asset for Bootstrap Buttons
 * https:https://github.com/lipis/bootstrap-social
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootstrapSocialAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2BootstrapSocialAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2BootstrapSocialAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootstrapSocialAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap-social@5.1.1';

	public $css = [
		'bootstrap-social.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-HJolxdGBvM/9NLCXgDaoWRIzTwsOLo1glwxXtZ9T7kYs13uNl+32ueMCMMlmPpNK',
		'crossorigin' => 'anonymous',
	];
	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

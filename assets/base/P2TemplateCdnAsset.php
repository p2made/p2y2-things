<?php
/**
 * P2TemplateCdnAsset.php
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
 * @class \p2m\assets\P2TemplateCdnAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####                   USAGE                   ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 *
 * 1. Copy this class & rename appropriately
 * 2. Replace all instances of 'P2TemplateCdnAsset' with the new class name
 * 3. Remove all unused variable blocks
 * 4. Replace all placeholders (wrapped in underscores '_') with values
 * 5. Delete this comment block
 */

/**
 * Load this asset with...
p2m\assets\P2TemplateCdnAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2TemplateCdnAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2TemplateCdnAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//_baseurl_';

	public $css = [
		'_source_min_css_',
	];

	public $cssOptions = [
		'integrity' => '_hash_',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'_source_min_js_',
	];

	public $jsOptions = [
		'integrity' => '_hash_',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2TemplateLocalAsset.php
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
 * @class \p2m\assets\P2TemplateLocalAsset
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
 * 2. Replace all instances of 'P2TemplateLocalAsset' with the new class name
 * 3. Remove all unused variable blocks
 * 4. Replace all placeholders (wrapped in underscores '_') with values
 * 5. Delete this comment block
 */

/**
 * Load this asset with...
 * p2m\assets\P2TemplateLocalAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2TemplateLocalAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2TemplateLocalAsset extends AssetBundle
{
	public $sourcePath = '@p2m/assets/lib';

	public $css = [
		'css/_source_min_css_',
	];

	public $js = [
		'js/_source_min_js_',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

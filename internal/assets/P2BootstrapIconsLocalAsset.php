<?php
/**
 * P2BootstrapIconsLocalAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/p2y2-things
 * @class \p2m\internal\assets\P2BootstrapIconsLocalAsset
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
 * 2. Replace all instances of 'P2BootstrapIconsLocalAsset' with the new class name
 * 3. Remove all unused variable blocks
 * 4. Replace all placeholders (wrapped in underscores '_') with values
 * 5. Delete this comment block
 */

/**
 * Load this asset with...
 * p2m\internal\assets\P2BootstrapIconsLocalAsset::register($this);
 *
 * or specify as a dependency with...
 *      'p2m\internal\assets\P2BootstrapIconsLocalAsset',
 */

namespace p2m\internal\assets;

use yii\web\AssetBundle;

class P2BootstrapIconsLocalAsset extends AssetBundle
{
	public $sourcePath = '@p2m/internal/assets/lib/bootstrap-icons';

	public $css = [
		'css/p2-bootstrap-icons.min.css',
	];

	public $depends = [
		'p2m\internal\assets\P2BootstrapIconsCdnAsset',
	];
}

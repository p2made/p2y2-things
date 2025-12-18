<?php
/**
 * P2CeruleanAsset.php
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
 * @class \p2m\assets\bootswatch\P2CeruleanAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2CeruleanAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2CeruleanAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2CeruleanAsset extends AssetBundle
{
	private $theme = 'cerulean';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-HqhCRk5UwZdbqmzeyYZHCwu3IuFe84q3c8UZtboEpYrdnIwi0RLZDag0RpKbFBHL';

	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => $cssIntegrity,
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapPluginAsset',
	];
}

<?php
/**
 * P2LumenAsset.php
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
 * @class \p2m\assets\bootswatch\P2LumenAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2LumenAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2LumenAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2LumenAsset extends AssetBundle
{
	private $theme = 'lumen';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-VvtmOf0H1c5UOkg0sTVnp2+DaE7+6PO78xrugFKUni8B3tEbZ6V56DNytr8Zs2ZI';

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

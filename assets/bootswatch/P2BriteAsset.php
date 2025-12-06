<?php
/**
 * P2BriteAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/P2madeAsset
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\bootswatch\P2BriteAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2BriteAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2BriteAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BriteAsset extends AssetBundle
{
	private $theme = 'brite';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-Ofi7E7ZOYTr4CxupdpiGUzzXde5ISlET4zbL25ujM4xQDsQmnLHb5H5d+Helx0qk';

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

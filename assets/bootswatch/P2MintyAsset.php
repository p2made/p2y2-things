<?php
/**
 * P2MintyAsset.php
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
 * @class \p2m\assets\bootswatch\P2MintyAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2MintyAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2MintyAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MintyAsset extends AssetBundle
{
	private $theme = 'minty';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-7cNn55KSVPdYzfuegchZCGqbVrV6ksXrmgEb1VZbPHSwQqCFDFTrQfg8MsZmSI7u';

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

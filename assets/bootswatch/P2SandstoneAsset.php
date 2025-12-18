<?php
/**
 * P2SandstoneAsset.php
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
 * @class \p2m\assets\bootswatch\P2SandstoneAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2SandstoneAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2SandstoneAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SandstoneAsset extends AssetBundle
{
	private $theme = 'sandstone';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-fNau2pcWOdbUULBw483bxURlLECRa/y2jWlGAJqBbnFzurmThA8gwbpHKogT37Do';

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

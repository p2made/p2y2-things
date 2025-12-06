<?php
/**
 * P2ZephyrAsset.php
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
 * @class \p2m\assets\bootswatch\P2ZephyrAsset
 */

/**
 * Load this asset with...
p2m\assets\bootswatch\P2ZephyrAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\bootswatch\P2ZephyrAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2ZephyrAsset extends AssetBundle
{
	private $theme = 'zephyr';
	private $version = '5.3.8';
	private $cssIntegrity = 'sha384-0qFVRx98HJem0F2omOB5o37vVaRuuesFrDqe5Q292oSriOauZU47Cz7anAMHnYnf';

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

<?php
/**
 * P2SimpleDatatablesAsset.php
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
 * @class \p2m\assets\P2SimpleDatatablesAsset
 */

/**
 * Load this asset with...
p2m\assets\P2SimpleDatatablesAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2SimpleDatatablesAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SimpleDatatablesAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/simple-datatables@10.2.0/dist';

	public $css = [
		'style.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-/vCCPNOCJILinbC5hd0Ww13KYuzYJdExP9j0KhBy0WirQXLPiYxhW85UH1A1rVSN',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'umd/simple-datatables.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-c4va+H5QpEtz9vxARkshzuk7Nr/xvTpPs05Ai22ehEScV0gsEG2L58nJnPk8U9ke',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

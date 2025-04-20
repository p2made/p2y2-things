<?php
/**
 * P2SweetAlertAsset.php
 *
 * Yii2 asset for SweetAlert
 * https://sweetalert.js.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2SweetAlertAsset
 */

/**
 * Load this asset with...
p2m\assets\P2SweetAlertAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2SweetAlertAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2SweetAlertAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist';

	public $js = [
		'sweetalert.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

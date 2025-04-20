<?php
/**
 * P2MagnificPopupAsset.php
 *
 * Yii2 asset for Magnific Popup
 * https://dimsemenov.com/plugins/magnific-popup/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2MagnificPopupAsset
 */

/**
 * Load this asset with...
p2m\assets\P2MagnificPopupAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2MagnificPopupAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MagnificPopupAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/magnific-popup@1.2.0/dist';

	public $css = [
		'magnific-popup.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-JcJRh5HXoDxKs7X2v463APHzHwt4fvvZWFaAfhw0MVo=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'jquery.magnific-popup.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-SjceFTUq3sYn9dUv2/1tZgSmiXDrfNkSu2T3iwgg/eQ=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

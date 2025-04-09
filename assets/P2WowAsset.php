<?php
/**
 * P2WowAsset.php
 *
 * Yii2 asset for WOW
 * https://www.delac.io/WOW
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2WowAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2WowAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2WowAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2WowAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/wowjs@1.1.3';

	public $css = [
		'css/libs/animate.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-ZtJf6CHhDITNWhOH6pcQpVhyw9Yv03tU+//RGQPIdy0=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'dist/wow.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-gHiUEskgBO+3ccSDRM+c5+nEwTGp64R99KYPfITpnuo=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2MetisMenuAsset.php
 *
 * Yii2 asset for metisMenu
 * http://mm.onokumus.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2MetisMenuAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2MetisMenuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2MetisMenuAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2MetisMenuAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/metismenu@3.0.7/dist';

	public $css = [
		'metisMenu.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-IPq7WPdVqKb34Ty7S+8CLn/rBj3F3PwHVefMuNdlJ+Y=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'metisMenu.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-CXoFWtETCSSvEQ9gUNr0+y97x8d6Bjkp9mZwvBfuFqI=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

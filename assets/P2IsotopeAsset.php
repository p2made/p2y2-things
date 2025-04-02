<?php
/**
 * P2IsotopeAsset.php
 *
 * Yii2 asset for Isotope
 * https://isotope.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2IsotopeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2IsotopeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2IsotopeAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2IsotopeAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//unpkg.com/isotope-layout@3/dist';

	public $js = [
		'isotope.pkgd.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=',
		'crossorigin' => 'anonymous',
	];
}

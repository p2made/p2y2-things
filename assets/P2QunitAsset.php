<?php
/**
 * P2QunitAsset.php
 *
 * Yii2 asset for QUnit
 * https://qunitjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2QunitAsset
 */

/**
 * Load this asset with...
p2m\assets\P2QunitAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2QunitAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2QunitAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/qunit@2.24.1/qunit';

	public $css = [
		'qunit.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-wSqUN23LGay2WO193/+7VPb6ytdhqub8RQlW2+Iu2z8=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'qunit.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-siBnpJxSClP9HzSu/3Hc7GNfzdbudXcRTH71mC4SGR4=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2HolderJsAsset.php
 *
 * Yii2 asset for Holder.js
 * http://holderjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2HolderJsAsset
 */

/**
 * Load this asset with...
p2m\assets\P2HolderJsAsset::register($this);

 * or specify as a dependency with...
		'p2m\assets\P2HolderJsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2HolderJsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/holderjs@2.9.9';

	public $js = [
		'holder.min.j',
	];

	public $jsOptions = [
		'integrity' => 'sha256-nQwLrn6KDmjRvP9frt70dSS7R2ubtjzxRry3Y+K3zKc=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

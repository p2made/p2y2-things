<?php
/**
 * P2YiiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\P2YiiAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'p2m\assets\P2YiiAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class P2YiiAsset extends \p2m\assets\base\P2AssetBundle
{
	public $sourcePath = '@yii/assets';
	public $js = [
		'yii.js',
	];
	public $depends = [
		'p2m\assets\JqueryAsset',
		'p2m\assets\JuiAsset',
	];
}

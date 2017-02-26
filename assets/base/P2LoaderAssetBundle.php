<?php
/**
 * P2LoaderAssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2LoaderAssetBundle::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2LoaderAssetBundle',
 */

namespace p2m\assets\base;

class P2LoaderAssetBundle extends \yii\web\AssetBundle
{

	/**
	 * A Loader is just to load a selection of other assets
	 * without loading any assets of its own...
	 *
	 * So the paths & URLs are null.
	 */
	public $basePath = null;
	public $sourcePath = null;
	public $baseUrl = null;

}

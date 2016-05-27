<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\base\P2AssetBundle::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\base\P2AssetBundle',
 */

namespace p2made\assets\base;

class P2AssetBundle extends \yii\web\AssetBundle
{
	/**
	 * [$sourcePath description]
	 * @var string
	 */
	public $sourcePath = null;

	/**
	 * [$basePath description]
	 * @var string
	 */
	public $basePath = null;

	/**
	 * [$baseUrl description]
	 * @var string
	 */
	public $baseUrl = null;

	/**
	 * [$css description]
	 * @var array
	 */
	public $css = [];

	/**
	 * [$js description]
	 * @var array
	 */
	public $js  = [];

	/**
	 * [$depends description]
	 * @var array
	 */
	public $depends = [];

	private static $_staticEnd;
	private static $_useStatic;

	protected function insertAssetVersion(&$target)
	{
		$target = str_replace ('##-version-##', $this->version, $target);
	}

	protected function configureAsset($resourceData)
	{
		if(isset($resourceData['cssOptions'])) {
			$this->cssOptions = $resourceData['cssOptions'];
		}
		if(isset($resourceData['jsOptions'])) {
			$this->jsOptions = $resourceData['jsOptions'];
		}
		if(isset($resourceData['depends'])) {
			$this->depends = $resourceData['depends'];
		}

		if(P2AssetBundle::useStatic()) {
			$this->configureStaticAsset($resourceData);
		} elseif(P2AssetBundle::staticEnd() !== false) {
		} else {
			$this->configurePublishedAsset($resourceData);
		}
	}

	protected function configurePublishedAsset($resourceData, $fallOut = false)
	{
		if(isset($resourceData['published'])) {
			$thisData = $resourceData['published'];
		} else { // no published asset data
			if($fallOut) {
				return;
			} else {
				$this->configureStaticAsset($resourceData, true);
			}
		}

		$thisPath = $thisData['sourcePath'];
		if(P2AssetBundle::staticEnd()) {
			$this->baseUrl = str_replace('#/', P2AssetBundle::staticEnd(), $thisPath);
		} else {
			$this->sourcePath = str_replace('#/', P2AssetBundle::ownPath(), $thisPath);
		}

		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	protected function configureStaticAsset($resourceData, $fallOut = false)
	{
		if(isset($resourceData['static'])) {
			$thisData = $resourceData['static'];
		} else { // no static asset data
			if($fallOut) {
				return;
			} else {
				$this->configurePublishedAsset($resourceData, true);
			}
		}

		if(isset($thisData['baseUrl'])) {
			$this->baseUrl = $thisData['baseUrl'];
		}
		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	protected static function useStatic()
	{
		if(isset($_useStatic)) { return $_useStatic; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['useStatic'])) {
			$_useStatic = \Yii::$app->params['p2made']['useStatic'];
		} else {
			$_useStatic = false;
		}

		return $_useStatic;
	}

	protected static function ownPath()
	{
		return '@vendor/p2made/yii2-p2y2-things/assets/lib/';
	}

	protected static function staticEnd()
	{
		if(isset($_staticEnd)) { return $_staticEnd; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['staticEnd'])) {
			$_staticEnd = \Yii::$app->params['p2made']['staticEnd'] . '/lib/';
		} else {
			$_staticEnd = false;
		}

		return $_staticEnd;
	}
}

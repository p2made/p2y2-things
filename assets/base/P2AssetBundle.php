<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2AssetBundle::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2AssetBundle',
 */

namespace p2m\assets\base;

class P2AssetBundle extends \yii\web\AssetBundle
{
	/**
	 * @var string
	 * public $sourcePath;
	 *
	 * @var string
	 * public $baseUrl;
	 *
	 * @var array
	 * public $css = [];
	 *
	 * @var array
	 * public $cssOptions = [];
	 *
	 * @var array
	 * public $js = [];
	 *
	 * @var array
	 * public $jsOptions = [];
	 *
	 * @var array
	 * public $depends = [];
	 *
	 * @var array
	 * public $publishOptions = [];
	 */

	private static $_staticEnd;
	private static $_useStatic;
	private static $_p2mPath = '@vendor/p2made/yii2-p2y2-things/assets/lib';

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
		if(isset($resourceData['publishOptions'])) {
			$this->publishOptions = $resourceData['publishOptions'];
		}

		if(P2AssetBundle::useStatic() && isset($resourceData['static'])) {
			$this->configureStaticAsset($resourceData['static']);
		} elseif(isset($resourceData['published'])) {
			$this->configurePublishedAsset($resourceData['published']);
		} else {
			return;
		}
	}

	protected function configureStaticAsset($thisData)
	{
		if(isset($thisData['baseUrl'])) {
			$this->baseUrl = $thisData['baseUrl'];
			$this->insertAssetVersion($this->baseUrl);
		}
		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	protected function configurePublishedAsset($thisData)
	{
		if(isset($thisData['sourcePath'])) {
			$this->sourcePath = $thisData['sourcePath'];
			$this->insertAssetVersion($this->sourcePath);
			$this->insertP2mPath($this->sourcePath);
		}

		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	// ===== utility functions ===== //

	protected function insertP2mPath(&$target)
	{
		$target = str_replace('@p2m@', '@vendor/p2made/yii2-p2y2-things/assets/lib', $target);
	}

	protected function insertAssetVersion(&$target)
	{
		if(isset($this->version)) {
			$target = str_replace('##-version-##', $this->version, $target);
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

	protected static function staticEnd()
	{
		if(isset($_staticEnd)) { return $_staticEnd; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['staticEnd'])) {
			$_staticEnd = \Yii::$app->params['p2made']['staticEnd'];
		} else {
			$_staticEnd = false;
		}

		return $_staticEnd;
	}

	protected static function p2mPath()
	{
		return $this->_p2mPath;
	}

}

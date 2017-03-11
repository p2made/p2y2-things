<?php
/**
 * BootstrapSweetalertAsset.php
 *
 * Yii2 asset for Bootstrap Sweetalert
 * http://lipis.github.io/bootstrap-sweetalert/
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapSweetalertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapSweetalertAsset',
 */

namespace p2m\assets;

class BootstrapSweetalertAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-sweetalert-##-version-##/dist',
			'css' => [
				'sweet-alert.css',
			],
			'js' => [
				'sweet-alert.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

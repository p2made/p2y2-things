<?php
/**
 * BootstrapSweetalertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\BootstrapSweetalertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\BootstrapSweetalertAsset',
 */

namespace p2made\assets;

class BootstrapSweetalertAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/bootstrap-sweetalert/lib',
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

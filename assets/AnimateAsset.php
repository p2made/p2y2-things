<?php
/**
 * AnimateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\AnimateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\AnimateAsset',
 */

namespace p2made\assets;

class AnimateAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.5.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/animate.css',
			'css' => [
				'animate.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/##-version-##',
			'css' => [
				'animate.min.css',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

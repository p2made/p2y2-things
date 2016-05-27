<?php
/**
 * BootstrapSocialAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\BootstrapSocialAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\BootstrapSocialAsset',
 */

namespace p2made\assets;

class BootstrapSocialAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '4.12.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/bootstrap-social',
			'css' => [
				'bootstrap-social.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/##-version-##',
			'css' => [
				'bootstrap-social.min.css',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapAsset',
			'p2made\assets\FontAwesomeAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

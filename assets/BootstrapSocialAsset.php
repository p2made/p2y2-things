<?php
/**
 * BootstrapSocialAsset.php
 *
 * Yii2 asset for Bootstrap Social
 * https://lipis.github.io/bootstrap-social/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\BootstrapSocialAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapSocialAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapSocialAsset',
 */

namespace p2m\assets;

class BootstrapSocialAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '5.1.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-social-##-version-##',
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
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * PrettyPhotoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\PrettyPhotoAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\PrettyPhotoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\PrettyPhotoAsset',
 */

namespace p2m\assets;

class PrettyPhotoAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.1.6';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/prettyPhoto_##-version-##',
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/##-version-##',
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
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

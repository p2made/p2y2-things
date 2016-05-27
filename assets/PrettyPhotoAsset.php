<?php
/**
 * PrettyPhotoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\PrettyPhotoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\PrettyPhotoAsset',
 */

namespace p2made\assets;

class PrettyPhotoAsset extends \p2made\assets\base\P2AssetBundle
{
	private $version = '3.1.6';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/prettyPhoto_3.1.6',
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/' . $this->version,
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

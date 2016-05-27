<?php
/**
 * MasonryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\MasonryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MasonryAsset',
 */

namespace p2made\assets;

class MasonryAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '4.0.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/masonry/dist',
			'js' => [
				'masonry.pkgd.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/masonry/##-version-##',
			'js' => [
				'masonry.pkgd.min.js',
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

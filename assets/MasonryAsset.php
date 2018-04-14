<?php
/**
 * MasonryAsset.php
 *
 * Yii2 asset for Masonry
 * http://masonry.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\MasonryAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MasonryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MasonryAsset',
 */

namespace p2m\assets;

class MasonryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '4.1.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/masonry-##-version-##/dist',
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

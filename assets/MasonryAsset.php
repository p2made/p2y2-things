<?php
/**
 * MasonryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
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

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/masonry/dist',
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
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

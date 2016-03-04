<?php
/**
 * MasonryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class MasonryAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/masonry-3.3.0/dist',
			'js' => [
				'masonry.pkgd.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/masonry/3.3.0/',
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

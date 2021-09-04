<?php
/**
 * MasonryAsset.php
 *
 * Yii2 asset for Masonry
 * https://masonry.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MasonryAsset
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
	protected $packageName = 'masonry-layout';

	protected $packageVersion = '4.2.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/masonry-layout@##-version-##/dist',
		'sourcePath' => '@npm/masonry-layout/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'masonry.pkgd.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

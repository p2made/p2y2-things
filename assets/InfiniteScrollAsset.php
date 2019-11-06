<?php
/**
 * InfiniteScrollAsset.php
 *
 * Yii2 asset for Infinite Scroll
 * https://infinite-scroll.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\InfiniteScrollAsset
 */

/**
 * Load this asset with...
 * p2m\assets\InfiniteScrollAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\InfiniteScrollAsset',
 */

namespace p2m\assets;

class InfiniteScrollAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'infinite-scroll';

	protected $packageVersion = '3.0.6';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/infinite-scroll@##-version-##/dist',
		'sourcePath' => '@npm/infinite-scroll/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-2o0eDtiURg21bbJ8Gfe0FVoA7nyRucxrUJH+rtZ46TKP8+D66f2ayNyUcBv6QDbM',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'infinite-scroll.pkgd.min.js',
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

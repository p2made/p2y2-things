<?php
/**
 * FlickityAsset.php
 *
 * Yii2 asset for Flickity
 * https://flickity.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\FlickityAsset
 */

/**
 * Load this asset with...
 * p2m\assets\FlickityAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FlickityAsset',
 */

namespace p2m\assets;

class FlickityAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'flickity';

	protected $packageVersion = '2.2.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/flickity@##-version-##/dist',
		'sourcePath' => '@npm/flickity/dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-YUf2GTc+8SEfw9NTIrQvlptcV/7jkO53QXZKUqJ3sp3QVKUbMAdb8txjxf8BjgFX',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-bbqpT4L0LrPaMT563kDc2Vj+2MPL/vQOoEHVOrXRO71BwJBFDIHhuBEmjcXxl7zD',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'flickity.min.css',
		],
		'js' => [
			'flickity.pkgd.min.js',
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

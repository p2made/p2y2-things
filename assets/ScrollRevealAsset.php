<?php
/**
 * ScrollRevealAsset.php
 *
 * Yii2 asset for ScrollReveal
 * https://scrollrevealjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\ScrollRevealAsset
 */

/**
 * Load this asset with...
 * p2m\assets\ScrollRevealAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ScrollRevealAsset',
 */

namespace p2m\assets;

class ScrollRevealAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'scrollreveal';

	protected $packageVersion = '4.0.5';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/scrollreveal@##-version-##/dist',
		'sourcePath' => '@npm/scrollreveal/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-plDrqMHgu5akDTXIrAQhPO/4CW+KQgfTc1aXcxU9BFcm2RokcPRlqLWclkVN0tf4',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'scrollreveal.min.js',
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

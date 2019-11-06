<?php
/**
 * EkkoLightboxAsset.php
 *
 * Yii2 asset for Lightbox for Bootstrap
 * http://ashleydw.github.io/lightbox
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\EkkoLightboxAsset
 */

/**
 * Load this asset with...
 * p2m\assets\EkkoLightboxAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\EkkoLightboxAsset',
 */

namespace p2m\assets;

class EkkoLightboxAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'ekko-lightbox';

	protected $packageVersion = '5.3.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/ekko-lightbox@##-version-##/dist',
		'sourcePath' => '@npm/ekko-lightbox/dist',
		'static' => [
			'css' => [
				'ekko-lightbox.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-Ra8Ik6nG0Uz2AquVG7R7zBuRUY/0u3NjxO8G88yp+z8o1s6+QkHih0Y+q8SdYdim',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-bqIl0+8hxcMpOFf8O3ffwAy5qTUbFPyuNFytX/omkD4RDPMOBtt/uV6Lqlw7sljM',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'ekko-lightbox.css',
		],
		'js' => [
			'ekko-lightbox.min.js',
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

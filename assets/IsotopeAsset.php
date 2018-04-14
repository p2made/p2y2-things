<?php
/**
 * IsotopeAsset.php
 *
 * Yii2 asset for Isotope
 * http://isotope.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\IsotopeAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\IsotopeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\IsotopeAsset',
 */

namespace p2m\assets;

class IsotopeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.0.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/isotope-##-version-##/dist',
			'js' => [
				'jquery.isotope.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/##-version-##',
			'js' => [
				'isotope.pkgd.min.js',
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

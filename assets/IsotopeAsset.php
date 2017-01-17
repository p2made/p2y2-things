<?php
/**
 * IsotopeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\IsotopeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\IsotopeAsset',
 */

namespace p2made\assets;

class IsotopeAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.0.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/isotope',
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
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

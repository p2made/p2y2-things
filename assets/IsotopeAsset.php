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
	protected $version = '2.2.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/isotope',
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
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

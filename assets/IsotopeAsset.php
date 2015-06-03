<?php
/**
 * IsotopeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class IsotopeAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/isotope-2.2.0/dist',
			'js' => [
				'isotope.pkgd.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/jquery.isotope/2.2.0',
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

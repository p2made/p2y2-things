<?php
/**
 * IsotopeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class IsotopeAsset extends P2AssetBundle
{
	private $libVersion = '2.2.2';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/isotope',
			'js' => [
				'jquery.isotope.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/' . $this->libVersion,
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

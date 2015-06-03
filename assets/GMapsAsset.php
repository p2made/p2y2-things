<?php
/**
 * GMapsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class GMapsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/gmaps',
			'js' => [
				'gmaps.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/gmaps.js/0.4.12',
			'js' => [
				'gmaps.min.js',
			],
		],
		'depends' => [
			'p2made\assets\GMapsApiAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

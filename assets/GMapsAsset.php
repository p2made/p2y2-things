<?php
/**
 * GMapsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class GMapsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/gmaps',
		'pub' => [
			'js' => [
				'gmaps.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.12/gmaps.min.js',
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

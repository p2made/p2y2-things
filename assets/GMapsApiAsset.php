<?php
/**
 * GMapsApiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class GMapsApiAsset extends P2AssetBundle
{
	private $resourceData = array(
		'cdn' => [
			'js' => [
				'http://maps.google.com/maps/api/js?sensor=true',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

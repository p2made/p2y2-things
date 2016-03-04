<?php
/**
 * GMapsApiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
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

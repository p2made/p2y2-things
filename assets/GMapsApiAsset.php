<?php
/**
 * GMapsApiAsset.php
 *
 * Yii2 asset for GMapsApi
 * http://maps.google.com/maps/api/
 *
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\GMapsApiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\GMapsApiAsset',
 */

namespace p2m\assets;

class GMapsApiAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'static' => [
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

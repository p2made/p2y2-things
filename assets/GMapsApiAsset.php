<?php
/**
 * GMapsApiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\GMapsApiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\GMapsApiAsset',
 */

namespace p2made\assets;

class GMapsApiAsset extends \p2made\assets\base\P2AssetBundle
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

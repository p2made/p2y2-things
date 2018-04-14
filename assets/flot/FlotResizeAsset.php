<?php
/**
 * FlotResizeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotResizeAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotResizeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotResizeAsset',
 */

namespace p2m\assets\flot;

class FlotResizeAsset extends \p2m\assets\flot\FlotAssetBase
{
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.resize.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.resize.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

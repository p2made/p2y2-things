<?php
/**
 * GMapsAsset.php
 *
 * Yii2 asset for GMaps.js
 * http://hpneo.github.io/gmaps/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\GMapsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\GMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\GMapsAsset',
 */

namespace p2m\assets;

class GMapsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.4.25';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/gmaps-##-version-##',
			'js' => [
				'gmaps.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/gmaps.js/##-version-##',
			'js' => [
				'gmaps.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\GMapsApiAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

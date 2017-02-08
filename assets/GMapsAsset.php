<?php
/**
 * GMapsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\GMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\GMapsAsset',
 */

namespace p2made\assets;

class GMapsAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.4.24';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/gmaps',
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
			'p2made\assets\GMapsApiAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

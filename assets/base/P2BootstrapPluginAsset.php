<?php
/**
 * P2BootstrapPluginAsset.php
 *
 * Yii2 asset for Bootstrap Plugin
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapPluginAsset
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2BootstrapPluginAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapPluginAsset',
 */

namespace p2m\assets\base;

class P2BootstrapPluginAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.3.7';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/bootstrap/dist',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/bootstrap/',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	);

	public function init()
	{
		$this->resourceData['static']['baseUrl'] .= $this->version;

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

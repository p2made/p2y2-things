<?php
/**
 * BootstrapPluginAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\BootstrapPluginAsset
 */

namespace p2m\assets\base;

/**
 * Load this asset with...
 * p2m\assets\base\BootstrapPluginAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\BootstrapPluginAsset',
 */
class BootstrapPluginAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.3.7';

	private $resourceData = array(
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
			'p2m\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->resourceData['static']['baseUrl'] .= $this->version;

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

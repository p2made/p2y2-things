<?php
/**
 * BootstrapPluginAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\base\BootstrapPluginAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\base\BootstrapPluginAsset',
 */

namespace p2made\assets\base;

class BootstrapPluginAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.3.6';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/bootstrap/dist',
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
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->resourceData['static']['baseUrl'] .= $this->version;

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * JqueryCountToAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\JqueryCountToAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\JqueryCountToAsset',
 */

namespace p2made\assets;

class JqueryCountToAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.1.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/jquery-countTo',
			'js' => [
				'jquery.countTo.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.jsdelivr.net/jquery.countto/##-version-##',
			'js' => [
				'jquery.countTo.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

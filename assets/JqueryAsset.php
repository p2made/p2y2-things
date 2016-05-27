<?php
/**
 * JqueryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\JqueryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\JqueryAsset',
 */

namespace p2made\assets;

class JqueryAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.2.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/jquery/dist',
			'js' => [
				'jquery.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'jquery-##-version-##.min.js',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

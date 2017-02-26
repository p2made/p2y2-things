<?php
/**
 * JqueryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryAsset',
 */

namespace p2m\assets;

class JqueryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.4';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/jquery/dist',
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

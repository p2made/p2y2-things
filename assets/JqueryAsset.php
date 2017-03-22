<?php
/**
 * JqueryAsset.php
 *
 * Yii2 asset for jQuery
 * http://jquery.com
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
	protected $version = '3.2.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery',
			'js' => [
				'jquery-##-version-##.min.js',
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

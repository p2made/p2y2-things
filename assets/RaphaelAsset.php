<?php
/**
 * RaphaelAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\RaphaelAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\RaphaelAsset',
 */

namespace p2made\assets;

class RaphaelAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.2.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/raphael-##-version-##',
			'js' => [
				'raphael-min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/raphael/##-version-##',
			'js' => [
				'raphael-min.js',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['published']['sourcePath']);
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

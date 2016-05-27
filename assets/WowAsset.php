<?php
/**
 * WowAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\WowAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\WowAsset',
 */

namespace p2made\assets;

class WowAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.1.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/WOW/dist',
			'js' => [
				'wow.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/wow/##-version-##',
			'js' => [
				'wow.min.js',
			],
		],
		'depends' => [
			'p2made\assets\AnimateAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

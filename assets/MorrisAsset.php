<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\MorrisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MorrisAsset',
 */

namespace p2made\assets;

class MorrisAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.5.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/morris.js-##-version-##',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/morris.js/##-version-##',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'depends' => [
			'p2made\assets\RaphaelAsset',
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

<?php
/**
 * FontAwesomeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FontAwesomeAsset',
 */

namespace p2made\assets;

class FontAwesomeAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '4.5.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/fortawesome/font-awesome',
			'css' => [
				'css/font-awesome.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/font-awesome/##-version-##',
			'css' => [
				'css/font-awesome.min.css',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

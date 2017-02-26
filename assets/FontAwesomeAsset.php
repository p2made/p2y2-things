<?php
/**
 * FontAwesomeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FontAwesomeAsset',
 */

namespace p2m\assets;

class FontAwesomeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '4.7.0';

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
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

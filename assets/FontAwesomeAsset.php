<?php
/**
 * FontAwesomeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FontAwesomeAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/fortawesome/font-awesome',
			'css' => [
				'css/font-awesome.min.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'bootstrap#/font-awesome/4.3.0',
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

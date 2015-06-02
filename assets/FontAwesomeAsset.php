<?php
/**
 * FontAwesomeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FontAwesomeAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/fortawesome/font-awesome',
		'pub' => [
			'css' => [
				'css/font-awesome.min.css',
			],
		],
		'cdn' => [
			'css' => [
				'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

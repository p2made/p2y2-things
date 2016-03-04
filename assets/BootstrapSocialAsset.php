<?php
/**
 * BootstrapSocialAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class BootstrapSocialAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/bootstrap-social',
			'css' => [
				'bootstrap-social.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/bootstrap-social/4.12.0',
			'css' => [
				'bootstrap-social.min.css',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapAsset',
			'p2made\assets\FontAwesomeAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

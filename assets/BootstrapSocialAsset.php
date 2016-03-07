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
	private $libVersion = '4.12.0';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/bootstrap-social',
			'css' => [
				'bootstrap-social.css',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/' . $this->libVersion,
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

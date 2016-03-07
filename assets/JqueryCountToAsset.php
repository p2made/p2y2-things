<?php
/**
 * JqueryCountToAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class JqueryCountToAsset extends P2AssetBundle
{
	private $libVersion = '0.1.0';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/jquery-countTo',
			'js' => [
				'jquery.countTo.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.jsdelivr.net/jquery.countto/' . $this->libVersion,
			'js' => [
				'jquery.countTo.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

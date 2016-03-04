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
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/jquery-countTo',
			'js' => [
				'jquery.countTo.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jsdelivr#/jquery.countto/0.1.0',
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

<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class MorrisAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/qunit',
			'css' => [
				'qunit-1.18.0.css',
			],
			'js' => [
				'qunit-1.18.0.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jquery#/qunit',
			'css' => [
				'qunit-1.18.0.css',
			],
			'js' => [
				'qunit-1.18.0.js',
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

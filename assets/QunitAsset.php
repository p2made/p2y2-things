<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MorrisAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/qunit',
		'pub' => [
			'css' => [
				'qunit-1.18.0.css',
			],
			'js' => [
				'qunit-1.18.0.js',
			],
		],
		'cdn' => [
			'css' => [
				'//code.jquery.com/qunit/qunit-1.18.0.css',
			],
			'js' => [
				'//code.jquery.com/qunit/qunit-1.18.0.js',
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

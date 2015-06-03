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
			'sourcePath' => '#/morris.js-0.5.1',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/morris.js/0.5.1',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.js/0.5.1/morris.min.js',
			],
		],
		'depends' => [
			'p2made\assets\RaphaelAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

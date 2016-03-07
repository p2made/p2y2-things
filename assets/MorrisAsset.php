<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class MorrisAsset extends P2AssetBundle
{
	private $libVersion = '0.5.1';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/morrisjs',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/morris.js/' . $this->libVersion,
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
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

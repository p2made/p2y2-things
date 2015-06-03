<?php
/**
 * ExcanvasAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class ExcanvasAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/flot-0.8.3',
			'js' => [
				'excanvas.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/flot/0.8.3',
			'js' => [
				'excanvas.min.js',
			],
		],
		'jsOptions' => [
			'condition' => 'lte IE9'
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

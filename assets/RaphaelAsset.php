<?php
/**
 * RaphaelAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class RaphaelAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/raphael-2.1.2',
			'js' => [
				'raphael-min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/raphael/2.1.2',
			'js' => [
				'raphael-min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

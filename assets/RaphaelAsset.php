<?php
/**
 * RaphaelAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class RaphaelAsset extends P2AssetBundle
{
	private $libVersion = '2.1.4';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/raphael',
			'js' => [
				'raphael-min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/raphael/' . $this->libVersion,
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

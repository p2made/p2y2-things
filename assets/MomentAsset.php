<?php
/**
 * MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class MomentAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/moment-2.10.3',
			'js' => [
				'moment.js'
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/moment.js/2.10.2',
			'js' => [
				'moment.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

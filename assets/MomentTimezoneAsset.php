<?php
/**
 * MomentTimezoneAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class MomentTimezoneAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/moment-timezone-0.3.1',
			'js' => [
				'moment-timezone.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/moment-timezone/0.3.1',
			'js' => [
				'moment-timezone.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

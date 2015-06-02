<?php
/**
 * MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MomentAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/moment-2.10.3',
		'pub' => [
			'js' => [
				'moment.js'
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

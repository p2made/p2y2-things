<?php
/**
 * RaphaelAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class RaphaelAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/raphael-2.1.2',
		'pub' => [
			'js' => [
				'raphael-min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

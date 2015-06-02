<?php
/**
 * JqueryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class JqueryAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/jquery',
		'pub' => [
			'js' => [
				'jquery-1.11.3.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//code.jquery.com/jquery-1.11.3.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

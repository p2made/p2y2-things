<?php
/**
 * JqueryMigrateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class JqueryMigrateAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/jquery',
		'pub' => [
			'js' => [
				'jquery-migrate-1.2.1.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//code.jquery.com/jquery-migrate-1.2.1.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

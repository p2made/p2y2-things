<?php
/**
 * JqueryMigrateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class JqueryMigrateAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/jquery',
			'js' => [
				'jquery-migrate-1.2.1.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jquery#/',
			'js' => [
				'jquery-migrate-1.2.1.min.js',
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

<?php
/**
 * DataTablesColReorderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesColReorderAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-colreorder',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/colreorder/1.3.1',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\DataTablesAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

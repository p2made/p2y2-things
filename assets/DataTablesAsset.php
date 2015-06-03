<?php
/**
 * DataTablesAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/DataTables-1.10.7',
			'css' => [
				'plugins/integration/bootstrap/3/dataTables.bootstrap.css',
				'extensions/Responsive/css/dataTables.responsive.css',
			],
			'js' => [
				'media/js/jquery.dataTables.min.js',
				'plugins/integration/bootstrap/3/dataTables.bootstrap.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'datatables#/',
			'css' => [
				'plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css',
				'responsive/1.0.3/css/dataTables.responsive.css',
			],
			'js' => [
				'1.10.7/js/jquery.dataTables.min.js',
				'plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js',
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

<?php
/**
 * DataTablesFixedHeaderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesFixedHeaderAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-fixedheader',
			'css' => [
				'css/fixedHeader.dataTables.scss',
				//'css/fixedHeader.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.fixedHeader.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/fixedheader/3.1.1',
			'css' => [
				'css/fixedHeader.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
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

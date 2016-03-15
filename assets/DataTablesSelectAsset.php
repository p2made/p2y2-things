<?php
/**
 * DataTablesSelectAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesSelectAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-select',
			'css' => [
				'css/select.dataTables.scss',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/select/1.1.2',
			'css' => [
				'css/select.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
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

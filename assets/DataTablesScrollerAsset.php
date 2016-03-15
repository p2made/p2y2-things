<?php
/**
 * DataTablesScrollerAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesScrollerAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-scroller',
			'css' => [
				'css/scroller.dataTables.scss',
				//'css/scroller.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.scroller.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/scroller/1.4.1',
			'css' => [
				'css/scroller.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
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

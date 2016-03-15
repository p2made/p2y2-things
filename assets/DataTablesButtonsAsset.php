<?php
/**
 * DataTablesButtonsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesButtonsAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-buttons',
			'css' => [
				'css/buttons.dataTables.scss',
				//'css/buttons.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.buttons.js',
				//'js/buttons.bootstrap.js',
				//'js/buttons.colVis.js',
				//'js/buttons.flash.js',
				//'js/buttons.html5.js',
				//'js/buttons.print.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/buttons/1.1.2',
			'css' => [
				'css/buttons.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				//'js/buttons.colVis.min.js',
				//'js/buttons.flash.min.js',
				//'js/buttons.html5.min.js',
				//'js/buttons.print.min.js',
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

<?php
/**
 * DataTablesAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables/media',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/1.10.11',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
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

/*
		files

			'sourcePath' => '@vendor/bower/datatables/media',
				'css/jquery.dataTables.min.css',
				'js/jquery.dataTables.min.js',

				'css/dataTables.bootstrap.min.css',
				'css/dataTables.bootstrap4.min.css',
				'css/dataTables.foundation.min.css',
				'css/dataTables.jqueryui.min.css',
				'css/dataTables.material.min.css',
				'css/dataTables.semanticui.min.css',
				'css/dataTables.uikit.min.css',
				'css/jquery.dataTables_themeroller.css',

				'js/dataTables.bootstrap.min.js',
				'js/dataTables.bootstrap4.min.js',
				'js/dataTables.foundation.min.js',
				'js/dataTables.jqueryui.min.js',
				'js/dataTables.material.min.js',
				'js/dataTables.semanticui.min.js',
				'js/dataTables.uikit.min.js',

			'baseUrl' => '//cdn.datatables.net/1.10.11',
				'css/jquery.dataTables.min.css',
				'js/jquery.dataTables.min.js',

 */

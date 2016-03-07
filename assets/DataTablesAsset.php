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
	private $libVersion = '1.10.11';

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
			'baseUrl' => '//cdn.datatables.net/' . $this->libVersion,
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
			'baseUrl' => '//cdn.datatables.net/' . $this->libVersion,

				'css/dataTables.bootstrap.css',
				'css/dataTables.bootstrap.min.css',
				'css/dataTables.bootstrap4.css',
				'css/dataTables.bootstrap4.min.css',
				'css/dataTables.foundation.css',
				'css/dataTables.foundation.min.css',
				'css/dataTables.jqueryui.css',
				'css/dataTables.jqueryui.min.css',
				'css/dataTables.material.css',
				'css/dataTables.material.min.css',
				'css/dataTables.semanticui.css',
				'css/dataTables.semanticui.min.css',
				'css/dataTables.uikit.css',
				'css/dataTables.uikit.min.css',
				'css/jquery.dataTables_themeroller.css',
				'css/jquery.dataTables.css',
				'css/jquery.dataTables.min.css',

				'js/dataTables.bootstrap.js',
				'js/dataTables.bootstrap.min.js',
				'js/dataTables.bootstrap4.js',
				'js/dataTables.bootstrap4.min.js',
				'js/dataTables.foundation.js',
				'js/dataTables.foundation.min.js',
				'js/dataTables.jqueryui.js',
				'js/dataTables.jqueryui.min.js',
				'js/dataTables.material.js',
				'js/dataTables.material.min.js',
				'js/dataTables.semanticui.js',
				'js/dataTables.semanticui.min.js',
				'js/dataTables.uikit.js',
				'js/dataTables.uikit.min.js',
				'js/jquery.dataTables.js',
				'js/jquery.dataTables.min.js',
				'js/jquery.js',
*/

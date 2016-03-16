<?php
/**
 * DataTablesAutoFillAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesAutoFillAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-autofill',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/autofill/2.1.1',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
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

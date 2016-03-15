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
				'css/autoFill.dataTables.scss',
				//'css/autoFill.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.autoFill.js',
				//'js/autoFill.bootstrap.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/autofill/2.1.1',
			'css' => [
				'css/autoFill.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
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

<?php
/**
 * DataTablesResponsiveAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesResponsiveAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-responsive',
			'css' => [
				'css/responsive.dataTables.scss',
				//'css/responsive.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.responsive.js',
				//'js/responsive.bootstrap.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/responsive/2.0.2',
			'css' => [
				'css/responsive.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
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

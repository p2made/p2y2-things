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

class DataTablesButtonsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-buttons',
			'css' => [
				'css/buttons.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				'js/buttons.bootstrap.min.js',
				//'js/buttons.colVis.min.js',
				//'js/buttons.flash.min.js',
				//'js/buttons.html5.min.js',
				//'js/buttons.print.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/buttons/1.1.2',
			'css' => [
				'css/buttons.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				'js/buttons.bootstrap.min.js',
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

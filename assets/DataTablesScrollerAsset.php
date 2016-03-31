<?php
/**
 * DataTablesScrollerAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\DataTablesScrollerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\DataTablesScrollerAsset',
 */

namespace p2made\assets;

class DataTablesScrollerAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-scroller',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/scroller/1.4.1',
			'css' => [
				'css/scroller.bootstrap.min.css',
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

<?php
/**
 * DataTablesFixedHeaderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\DataTablesFixedHeaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\DataTablesFixedHeaderAsset',
 */

namespace p2made\assets;

class DataTablesFixedHeaderAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-fixedheader',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/fixedheader/3.1.1',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
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

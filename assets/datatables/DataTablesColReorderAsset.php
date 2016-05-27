<?php
/**
 * DataTablesColReorderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesColReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesColReorderAsset',
 */

namespace p2made\assets\datatables; /* edit this if using elsewhere */

class DataTablesColReorderAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.3.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-colreorder',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/colreorder/##-version-##',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\DataTablesAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

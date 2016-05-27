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
 * p2made\assets\datatables\DataTablesFixedHeaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesFixedHeaderAsset',
 */

namespace p2made\assets\datatables; /* edit this if using elsewhere */

class DataTablesFixedHeaderAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.1.2';

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
			'baseUrl' => '//cdn.datatables.net/fixedheader/##-version-##',
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
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

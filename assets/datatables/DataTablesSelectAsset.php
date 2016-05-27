<?php
/**
 * DataTablesSelectAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesSelectAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesSelectAsset',
 */

namespace p2made\assets\datatables; /* edit this if using elsewhere */

class DataTablesSelectAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.2.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-select',
			'css' => [
				'css/select.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/select/##-version-##',
			'css' => [
				'css/select.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

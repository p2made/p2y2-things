<?php
/**
 * DataTablesRowReorderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesRowReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesRowReorderAsset',
 */

namespace p2made\assets\datatables;

class DataTablesRowReorderAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.2.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-rowreorder',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowreorder/##-version-##',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

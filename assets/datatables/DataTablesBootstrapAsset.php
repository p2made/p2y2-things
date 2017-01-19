<?php
/**
 * DataTablesBootstrapAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesBootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesBootstrapAsset',
 */

namespace p2made\assets\datatables;

class DataTablesBootstrapAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.10.13';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables/media',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##-version-##',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
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

<?php
/**
 * DataTablesSelectAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesSelectAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesSelectAsset',
 */

namespace p2m\assets\datatables;

class DataTablesSelectAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-select',
			'css' => [
				'css/select.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/select/##-version-##',
			'css' => [
				'css/select.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

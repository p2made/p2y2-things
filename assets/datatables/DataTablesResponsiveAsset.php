<?php
/**
 * DataTablesResponsiveAsset.php
 *
 * Yii2 asset for DataTables Responsive
 * https://github.com/DataTables/Responsive
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesResponsiveAsset',
 */

namespace p2m\assets\datatables;

class DataTablesResponsiveAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.1.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/Responsive-##-version-##',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

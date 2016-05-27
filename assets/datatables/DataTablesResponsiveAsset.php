<?php
/**
 * DataTablesResponsiveAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesResponsiveAsset',
 */

namespace p2made\assets\datatables; /* edit this if using elsewhere */

class DataTablesResponsiveAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.1.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/datatables-responsive',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.datatables.net/responsive/##-version-##',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\datatables\DataTablesAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

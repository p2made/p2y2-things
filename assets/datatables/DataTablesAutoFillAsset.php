<?php
/**
 * DataTablesAutoFillAsset.php
 *
 * Yii2 asset for DataTables AutoFill
 * https://github.com/DataTables/AutoFill
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesAutoFillAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesAutoFillAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesAutoFillAsset',
 */

namespace p2m\assets\datatables; /* edit this if using elsewhere */

class DataTablesAutoFillAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.0';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables/AutoFill-##-version-##',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

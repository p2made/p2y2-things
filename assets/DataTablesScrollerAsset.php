<?php
/**
 * DataTablesScrollerAsset.php
 *
 * Yii2 asset for DataTables
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\DataTablesScrollerAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesScrollerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesScrollerAsset',
 */

namespace p2m\assets;

class DataTablesScrollerAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-scroller-bs4';

	protected $packageVersion = '2.0.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/scroller/##-version-##',
		'sourcePath' => '@npm/datatables.net-scroller-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-wIRbCocqGp2W33vrUhPum15S17ENhIRifUVmP+DPvKsI9jaMV6DGZ1JQEm0Wts8b',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-EKjUbiqPSLc7sIMXxRY6tvtGedLDQf+6P90Nc1uc1eOIcI7cLaNnCOPWOzoEQYZm',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/scroller.bootstrap4.min.css',
		],
		'js' => [
			'js/scroller.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\DataTablesAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

<?php
/**
 * DataTablesRowReorderAsset.php
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
 * @class \p2m\assets\DataTablesRowReorderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesRowReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesRowReorderAsset',
 */

namespace p2m\assets;

class DataTablesRowReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-rowreorder-bs4';

	protected $packageVersion = '1.2.6';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/rowreorder/##-version-##',
		'sourcePath' => '@npm/datatables.net-rowreorder-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-pVrsWa1E1GlEJUfnZXLCxT6AScWbwY/NkJAW8vKG5ZhEbCsSUfj7tY/ePTD9MevD',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-uDOKXKYrWRAE4YuBfyN273l59KhqS1ykBNDMKWcItY2ukCqbgaJYOzVXaD1ecjFY',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/rowReorder.bootstrap4.min.css',
		],
		'js' => [
			'js/rowReorder.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

<?php
/**
 * DataTablesButtonsPrintAsset.php
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
 * @class \p2m\assets\DataTablesButtonsPrintAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesButtonsPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesButtonsPrintAsset',
 */

namespace p2m\assets;

class DataTablesButtonsPrintAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
		'sourcePath' => '@npm/datatables.net-buttons',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-XB54OBl3rOOjrhqlr+qwWqLv0GRnzVGFYKHPwdJnah4TyB7vQuYckQSsxQxGOA8d',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/buttons.print.min.js',
		],
		'depends' => [
			'p2m\assets\DataTablesButtonsAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

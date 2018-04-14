<?php
/**
 * DataTablesButtonsPrintAsset.php
 *
 * Yii2 asset for DataTables Buttons Print View
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsPrintAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsPrintAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsPrintAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.3.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.print.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.print.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

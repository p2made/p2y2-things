<?php
/**
 * DataTablesFlashExportAsset.php
 *
 * Yii2 asset for DataTables Buttons Flash Export
 * https://github.com/DataTables/Buttons
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFlashExportAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFlashExportAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFlashExportAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/Buttons-##-version-##',
			'js' => [
				'buttons.flash.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'buttons.flash.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
			'p2m\assets\datatables\DataTablesBootstrapAsset',
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * DataTablesButtonsAsset.php
 *
 * Yii2 asset for DataTables Buttons
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
 * p2m\assets\datatables\DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.4';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/Buttons-##-version-##',
			'css' => [
				'css/buttons.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.buttons.js',
				'js/buttons.bootstrap.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'css' => [
				'css/buttons.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				'js/buttons.bootstrap.min.js',
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

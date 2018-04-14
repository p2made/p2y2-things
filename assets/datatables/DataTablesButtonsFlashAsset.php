<?php
/**
 * DataTablesButtonsFlashAsset.php
 *
 * Yii2 asset for DataTables Buttons Flash
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsFlashAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsFlashAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsFlashAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsFlashAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.3.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.flash.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.flash.min.js',
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

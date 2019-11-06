<?php
/**
 * DataTablesButtonsFlashAsset.php
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
 * @class \p2m\assets\DataTablesButtonsFlashAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesButtonsFlashAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesButtonsFlashAsset',
 */

namespace p2m\assets;

class DataTablesButtonsFlashAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
		'sourcePath' => '@npm/datatables.net-buttons',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-wSYm3f5KwqkbUyg1t+MTmmR9bfnkC0/8c5jXFDqjkOl9nAg5H0eS2Tx2Ca7dB8hk',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/buttons.flash.min.js',
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

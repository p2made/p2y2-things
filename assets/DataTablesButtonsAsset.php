<?php
/**
 * DataTablesButtonsAsset.php
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
 * @class \p2m\assets\DataTablesButtonsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesButtonsAsset',
 */

namespace p2m\assets;

class DataTablesButtonsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons-bs4';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
		'sourcePath' => '@npm/datatables.net-buttons-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-398XeaYNY5EFTKfmXePptGA30MTOoq30GevEaXBFbmsVJHQY8aZDIM8KONfp0rge',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-gFF58SpCAE1VkWP2GMVDbtNjM6JqG8TAQH2tiTDz1rF8q7s9duWXGdM2TTdBAVCi',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/buttons.bootstrap4.min.css',
		],
		'js' => [
			'js/buttons.bootstrap4.min.js',
		],
		'depends' => [
			'p2m\assets\base\DataTablesButtonsAssetBase',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

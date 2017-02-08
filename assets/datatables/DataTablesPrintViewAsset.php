<?php
/**
 * DataTablesPrintViewAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesPrintViewAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesPrintViewAsset',
 */

namespace p2made\assets\datatables;

class DataTablesPrintViewAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.2.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-buttons',
			'js' => [
				'js/buttons.print.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.print.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\datatables\DataTablesBootstrapAsset',
			'p2made\assets\datatables\DataTablesButtonsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

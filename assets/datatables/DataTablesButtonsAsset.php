<?php
/**
 * DataTablesButtonsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesButtonsAsset',
 */

namespace p2made\assets\datatables;

class DataTablesButtonsAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.2.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-buttons',
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
			'p2made\assets\JqueryAsset',
			'p2made\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

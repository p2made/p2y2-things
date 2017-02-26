<?php
/**
 * DataTablesAutoFillAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesAutoFillAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesAutoFillAsset',
 */

namespace p2m\assets\datatables; /* edit this if using elsewhere */

class DataTablesAutoFillAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.1.3';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-autofill',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
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

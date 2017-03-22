<?php
/**
 * DataTablesBootstrapAsset.php
 *
 * Yii2 asset for DataTables Bootstrap
 * https://www.datatables.net
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesBootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesBootstrapAsset',
 */

namespace p2m\assets\datatables;

class DataTablesBootstrapAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.10.13';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/DataTables-##-version-##/media',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##-version-##',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/*
dataTables.bootstrap.min.css
dataTables.bootstrap.min.js
dataTables.bootstrap4.min.css
dataTables.bootstrap4.min.js
dataTables.foundation.min.css
dataTables.foundation.min.js
dataTables.jqueryui.min.css
dataTables.jqueryui.min.js
dataTables.material.min.css
dataTables.material.min.js
dataTables.semanticui.min.css
dataTables.semanticui.min.js
dataTables.uikit.min.css
dataTables.uikit.min.js
jquery.dataTables_themeroller.css
jquery.dataTables.min.css
jquery.dataTables.min.js
*/

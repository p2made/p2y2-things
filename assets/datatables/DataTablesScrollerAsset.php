<?php
/**
 * DataTablesScrollerAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\datatables\DataTablesScrollerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\datatables\DataTablesScrollerAsset',
 */

namespace p2made\assets\datatables;

class DataTablesScrollerAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.4.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/datatables-scroller',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/scroller/##-version-##',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

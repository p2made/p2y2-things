<?php
/**
 * DataTablesAsset.php
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
 * @class \p2m\assets\DataTablesAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesAsset',
 */

namespace p2m\assets;

class DataTablesAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-bs4';

	protected $packageVersion = '1.10.20';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/##-version-##',
		'sourcePath' => '@npm/datatables.net-bs4',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-EkHEUZ6lErauT712zSr0DZ2uuCmi3DoQj6ecNdHQXpMpFNGAQ48WjfXCE5n20W+R',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-dsXH1jw5mvdtskz6tkzogTCdKWJv4k12j2BOHq3okVzlZiIsQhQXSh0I86ggUPPf',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/dataTables.bootstrap4.min.css',
		],
		'js' => [
			'js/dataTables.bootstrap4.min.js',
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

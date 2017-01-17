<?php
/**
 * PdfMakeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\PdfMakeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\PdfMakeAsset',
 */

namespace p2made\assets;

class PdfMakeAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.1.18';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/pdfmake',
			'js' => [
				'build/pdfmake.min.js',
				'build/vfs_fonts.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.rawgit.com/bpampuch/pdfmake/##-version-##',
			'js' => [
				'build/pdfmake.min.js',
				'build/vfs_fonts.js',
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

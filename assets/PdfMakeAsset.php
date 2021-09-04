<?php
/**
 * PdfMakeAsset.php
 *
 * Yii2 asset for pdfmake
 * http://pdfmake.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\PdfMakeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\PdfMakeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\PdfMakeAsset',
 */

namespace p2m\assets;

class PdfMakeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'pdfmake';

	protected $packageVersion = '0.1.60';

	protected $packageData = [
		'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/##-version-##',
		'sourcePath' => '@bower/pdfmake/build',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-bp4sgoC2kLRngEiDQvdyF2U/YLPD3wgh8pucz+VKwwSZT/F8pYMqC569o6409LKr',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'pdfmake.min.js',
		],
		'depends' => [
			'p2m\assets\VfsFontsAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

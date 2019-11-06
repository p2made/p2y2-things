<?php
/**
 * VfsFontsAsset.php
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
 * @class \p2m\assets\VfsFontsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\VfsFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\VfsFontsAsset',
 */

namespace p2m\assets;

class VfsFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'pdfmake';

	protected $packageVersion = '0.1.60';

	protected $packageData = [
		'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/##-version-##',
		'sourcePath' => '@bower/pdfmake/build',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-UAA3vlTPq9dwxB61awBFhR7Y5uBFOKQWuZueu4C6uI48gjIoqI/OTmYWEYWZXbGR',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'vfs_fonts.js',
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

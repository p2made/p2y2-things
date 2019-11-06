<?php
/**
 * Lightbox2Asset.php
 *
 * Yii2 asset for LIGHTBOX
 * https://lokeshdhakar.com/projects/lightbox2/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\Lightbox2Asset
 */

/**
 * Load this asset with...
 * p2m\assets\Lightbox2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\Lightbox2Asset',
 */

namespace p2m\assets;

class Lightbox2Asset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'lightbox2';

	protected $packageVersion = '2.11.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/lightbox2@##-version-##/dist',
		'sourcePath' => '@npm/lightbox2/dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-MzHT0pgTPI8fjMvEz54yA7HmSVjLLsxl+ytGS13+EOr/L5uLaBakmchzKgDYsSQz',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-iYi/WcdpdDnsQeo7Bv1vEZtM+pjKSYb7Wo8zmDR89W1cOVp8VPi1ovc5dCFfOJml',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/lightbox.min.css',
		],
		'js' => [
			'js/lightbox.min.js',
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

<?php
/**
 * WowAsset.php
 *
 * Yii2 asset for WOW
 * https://www.delac.io/wow/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\WowAsset
 */

/**
 * Load this asset with...
 * p2m\assets\WowAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\WowAsset',
 */

namespace p2m\assets;

class WowAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'wow';

	protected $packageVersion = '1.1.2';

	protected $packageData = [
		'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/wow/##-version-##',
		'sourcePath' => '@bower/wow/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-V27yAyb3yYhZbiwaK9Sgxh9Cywkf/H2al4wcrcp/hKF9ZYT7d5saGJFoO/0v1Cgs',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'wow.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\AnimateAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

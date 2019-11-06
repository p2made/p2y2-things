<?php
/**
 * MorrisAsset.php
 *
 * Yii2 asset for morris.js
 * http://morrisjs.github.io/morris.js/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MorrisAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MorrisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MorrisAsset',
 */

namespace p2m\assets;

class MorrisAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'morris.js';

	protected $packageVersion = '0.5.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/morris.js@##-version-##',
		'sourcePath' => '@npm/morris.js',
		'static' => [
			'css' => [
				'morris.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-QtmAcfo2z5YBnthp8cMvCB5AWnYhqjU8Q6loSdnhaL07hTbTyZLGo5/NkmyvcLic',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-MrrVsMWyWD/58C8bLi2HA+haFjprTcQgAi/RIkF+Pu93ugZuKEZErN84oJiuRtJa',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'morris.css',
		],
		'js' => [
			'morris.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\RaphaelAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

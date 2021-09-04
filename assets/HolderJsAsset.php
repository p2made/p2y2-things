<?php
/**
 * HolderJsAsset.php
 *
 * Yii2 asset for Holder.js
 * http://holderjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\HolderJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\HolderJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\HolderJsAsset',
 */

namespace p2m\assets;

class HolderJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'holderjs';

	protected $packageVersion = '2.9.6';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/holderjs@##-version-##',
		'sourcePath' => '@npm/holderjs',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-bSAO0//FZ+kEkMUA+BQwV9+DKxRuFoPhjdZJZmjmoc3M66CVZE/uRacR/B8tBVl+',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'holder.min.js',
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

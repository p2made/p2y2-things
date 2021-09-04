<?php
/**
 * FitvidsAsset.php
 *
 * Yii2 asset for fitvids
 * https://github.com/rosszurowski/fitvids
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\FitvidsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\FitvidsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FitvidsAsset',
 */

namespace p2m\assets;

class FitvidsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'fitvids';

	protected $packageVersion = '2.1.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/fitvids@##-version-##/dist',
		'sourcePath' => '@npm/fitvids/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-gv1n+hTwWrE0qXw6bl3Yf+WNM8ffb/60Tstd86MrcYMBv2gNRABDixs9r2jn4f4I',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'fitvids.min.js',
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

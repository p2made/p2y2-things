<?php
/**
 * MomentAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MomentAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentAsset',
 */

namespace p2m\assets;

class MomentAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/min',
		'sourcePath' => '@npm/moment/min',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-fYxN7HsDOBRo1wT/NSZ0LkoNlcXvpDpFy6WzB42LxuKAX7sBwgo7vuins+E1HCaw',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'moment.min.js',
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

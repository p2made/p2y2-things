<?php
/**
 * PackeryAsset.php
 *
 * Yii2 asset for Packery
 * https://packery.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\PackeryAsset
 */

/**
 * Load this asset with...
 * p2m\assets\PackeryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\PackeryAsset',
 */

namespace p2m\assets;

class PackeryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'packery';

	protected $packageVersion = '2.1.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/packery@##-version-##/dist',
		'sourcePath' => '@npm/packery/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-oDkIpS8P/WkhvJZRketv7d32JVt7Rc2ZpaZV4sEDokacrFvLBs1q1vlgtKm9vxJJ',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'packery.pkgd.min.js',
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

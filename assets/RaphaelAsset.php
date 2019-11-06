<?php
/**
 * RaphaelAsset.php
 *
 * Yii2 asset for Raphaël
 * http://dmitrybaranovskiy.github.io/raphael/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\RaphaelAsset
 */

/**
 * Load this asset with...
 * p2m\assets\RaphaelAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\RaphaelAsset',
 */

namespace p2m\assets;

class RaphaelAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'raphael';

	protected $packageVersion = '2.3.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/raphael@##-version-##',
		'sourcePath' => '@npm/raphael',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-5fwEhxN8gjmQlK6ngccfyi8BVu5leqLqTqliCXNoLVGCjpGfzJwJ2pS8BLDIxWSt',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'raphael.min.js',
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

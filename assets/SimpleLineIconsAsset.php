<?php
/**
 * SimpleLineIconsAsset.php
 *
 * Yii2 asset for simple-line-icons
 * https://github.com/thesabbir/simple-line-icons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\SimpleLineIconsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\SimpleLineIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SimpleLineIconsAsset',
 */

namespace p2m\assets;

class SimpleLineIconsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'simple-line-icons';

	protected $packageVersion = '2.4.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/simple-line-icons@##-version-##/css',
		'sourcePath' => '@npm/simple-line-icons/css',
		'static' => [
			'css' => [
				'simple-line-icons.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-w6FBRh4+jBKoYeP4JyxXZ4n+23TqFB0RWYwiaHIqyyfUv1Cu46eXVdi4LcyVtjz+',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'simple-line-icons.css',
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

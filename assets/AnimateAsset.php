<?php
/**
 * AnimateAsset.php
 *
 * Yii2 asset for Animate.css
 * https://daneden.github.io/animate.css/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\AnimateAsset
 */

/**
 * Load this asset with...
 * p2m\assets\AnimateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AnimateAsset',
 */

namespace p2m\assets;

class AnimateAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'animate.css';

	protected $packageVersion = '3.7.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/animate.css@##-version-##',
		'sourcePath' => '@npm/animate.css',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-7/Tl0k65OTvDSvtuq7aPR7aa0aCz7ZKqHsbMRLxhzueldW+9MZpCe9LB1c5UBuNS',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'animate.min.css',
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

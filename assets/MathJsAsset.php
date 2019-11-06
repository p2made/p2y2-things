<?php
/**
 * MathJsAsset.php
 *
 * Yii2 asset for Math.js
 * https://mathjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MathJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MathJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MathJsAsset',
 */

namespace p2m\assets;

class MathJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'mathjs';

	protected $packageVersion = '6.2.3';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/mathjs@##-version-##/dist',
		'sourcePath' => '@npm/mathjs/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-WAbmGwLxJL310ItZFNyboj/yP4Ik1O3hYIKB4Pmfj2gLJqJV69nckszmDrw1SDR9',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'math.min.js',
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

<?php
/**
 * ChartJsAsset.php
 *
 * Yii2 asset for Chart.js
 * https://www.chartjs.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\ChartJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\ChartJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ChartJsAsset',
 */

namespace p2m\assets;

class ChartJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'chart.js';

	protected $packageVersion = '2.9.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/chart.js@##-version-##/dist',
		'sourcePath' => '@npm/chart.js/dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-q9MZ/PQCC1nIFQdrr9yNOFXeSaXjv/yPOJOdBd32aODh8+EM6udfo91a6mRbEDih',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-HD3oWWU02oY2e4gmUXEKY8D/aII2L2qM2+yU3/o/9H/dZdfhrSd6DLhQefqosgrj',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'Chart.min.css',
		],
		'js' => [
			'Chart.min.js',
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

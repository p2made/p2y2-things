<?php
/**
 * IsotopeAsset.php
 *
 * Yii2 asset for Isotope
 * https://isotope.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\IsotopeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\IsotopeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\IsotopeAsset',
 */

namespace p2m\assets;

class IsotopeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'isotope-layout';

	protected $packageVersion = '3.0.6';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/isotope-layout@##-version-##/dist',
		'sourcePath' => '@npm/isotope-layout/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-vtH+5pZsjdWxaTWlFSCrWM6i0TIG0HKOqJbPo91LB35dvWpVzuWdJeVoNweP+eoY',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'isotope.pkgd.min.js',
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

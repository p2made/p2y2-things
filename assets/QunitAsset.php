<?php
/**
 * QunitAsset.php
 *
 * Yii2 asset for QUnit
 * https://qunitjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\QunitAsset
 */

/**
 * Load this asset with...
 * p2m\assets\QunitAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\QunitAsset',
 */

namespace p2m\assets;

class QunitAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'qunit';

	protected $packageVersion = '2.9.3';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/qunit@##-version-##',
		'sourcePath' => '@npm/qunit',
		'static' => [
			'css' => [
				'qunit/qunit.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-xuDz+k5V2lQTYXxm4bfO7KvT0Rz+oga56eUNSQGlSsvUETjCRNRzWScbelo2LL3w',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'qunit/qunit.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-D7F1JjxPtofk0N4H+sYjiND2MBUsbEtDwyBQ31K/VXEGkQsdBoRn2JK5IXxVylCc',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'qunit/qunit.css',
		],
		'js' => [
			'qunit/qunit.js',
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

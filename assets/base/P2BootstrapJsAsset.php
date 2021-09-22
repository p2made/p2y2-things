<?php
/**
 * P2BootstrapJsAsset.php
 *
 * Yii2 asset for Bootstrap
 * https://getbootstrap.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2BootstrapJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapJsAsset',
 */

namespace p2m\assets\base;

class P2BootstrapJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'bootstrap';

	protected $packageVersion = '5.1.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/bootstrap@##-version-##/dist',
		'sourcePath' => '@npm/bootstrap/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/bootstrap.min.js',
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

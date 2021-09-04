<?php
/**
 * GMapsAsset.php
 *
 * Yii2 asset for gmaps.js
 * https://hpneo.dev/gmaps/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\GMapsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\GMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\GMapsAsset',
 */

namespace p2m\assets;

class GMapsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'gmaps';

	protected $packageVersion = '0.4.24';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/gmaps@##-version-##',
		'sourcePath' => '@npm/gmaps',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-0dtH2vLXnuX/8zr9v+SWIUywQYGezOWhJwjVYIMzJHSk2Zj1+h30lqT63x3EfKko',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'gmaps.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			//'p2m\assets\GMapsApiAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

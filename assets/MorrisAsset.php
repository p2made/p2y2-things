<?php
/**
 * MorrisAsset.php
 *
 * Yii2 asset for Morris.js
 * http://morrisjs.github.io/morris.js/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\MorrisAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MorrisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MorrisAsset',
 */

namespace p2m\assets;

class MorrisAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.5.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/morris.js-##-version-##',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/morris.js/##-version-##',
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\RaphaelAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

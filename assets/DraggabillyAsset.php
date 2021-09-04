<?php
/**
 * DraggabillyAsset.php
 *
 * Yii2 asset for Draggabilly
 * https://draggabilly.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\DraggabillyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DraggabillyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DraggabillyAsset',
 */

namespace p2m\assets;

class DraggabillyAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'draggabilly';

	protected $packageVersion = '2.2.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/draggabilly@##-version-##/dist',
		'sourcePath' => '@npm/draggabilly/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-JvmwKtrs1CjFC41kayyey74PQsYWrxToeXr0tsEyeYgZwi2aT4XZccR8SFqcobPC',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'draggabilly.pkgd.min.js',
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

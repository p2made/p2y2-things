<?php
/**
 * FlagIconCssAsset.php
 *
 * Yii2 asset for flag-icon-css
 * http://flag-icon-css.lip.is
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\FlagIconCssAsset
 */

/**
 * Load this asset with...
 * p2m\assets\FlagIconCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FlagIconCssAsset',
 */

namespace p2m\assets;

class FlagIconCssAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'flag-icon-css';

	protected $packageVersion = '3.4.5';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/flag-icon-css@##-version-##/css',
		'sourcePath' => '@npm/flag-icon-css/css',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-TIJGXlVZjQ+dYPHg+oN3KvSwKHZQ4RYNPfQcWedc6mLkHd/fkZBWaf0h9Jtk022u',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'flag-icon.min.css',
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

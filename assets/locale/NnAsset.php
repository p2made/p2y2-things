<?php
/**
 * NnAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\NnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\NnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\NnAsset',
 */

namespace p2m\assets\locale;

class NnAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-LB0fTgXSgcV37ZiuybZrwaN1NDzZXw+jmz9Ctk9nwCtaPF9H5G78tYhEXI0WD7pZ',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'nn.js',
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

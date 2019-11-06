<?php
/**
 * CaAsset.php
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
 * @class \p2m\assets\locale\CaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\CaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\CaAsset',
 */

namespace p2m\assets\locale;

class CaAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-ZW/PvYx5pz5JL10fiDUFLLNpH0sK8Fc5WSXskw4id2U9LjPtO7AvZd++OobT3gDC',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'ca.js',
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

<?php
/**
 * GomLatnAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\GomLatnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\GomLatnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\GomLatnAsset',
 */

namespace p2m\assets\locale;

class GomLatnAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-pS1twgDaPmkwT6Dg01l4MOvo278csmDicPOlOeqYsqmEClh7KPGvMuRv6VjxVhzd',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'gom-latn.js',
		],
		'depends' => [
			'p2m\assets\MomentAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

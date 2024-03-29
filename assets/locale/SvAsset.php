<?php
/**
 * SvAsset.php
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
 * @class \p2m\assets\locale\SvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SvAsset',
 */

namespace p2m\assets\locale;

class SvAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-IH/yagJAiVJ/b5npOx5GqpIsb5tWOvrHus40ITn40wLaNFTo8UU9lmmzRf03zk7R',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'sv.js',
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

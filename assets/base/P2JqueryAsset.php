<?php
/**
 * P2JqueryAsset.php
 *
 * Yii2 asset for jQuery
 * https://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2JqueryAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2JqueryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2JqueryAsset',
 */

namespace p2m\assets\base;

class P2JqueryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'jquery';

	protected $packageVersion = '3.4.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/jquery@##-version-##/dist',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'jquery.min.js',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

<?php
/**
 * FlotTooltipAsset.php
 *
 * Yii2 asset for Flot Tooltip
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotTooltipAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotTooltipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotTooltipAsset',
 */

namespace p2m\assets\flot;


class FlotTooltipAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.9.0';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/flot.tooltip-##-version-##',
			'js' => [
				'js/jquery.flot.tooltip.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot.tooltip/##-version-##',
			'js' => [
				'jquery.flot.tooltip.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

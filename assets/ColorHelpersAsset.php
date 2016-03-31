<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FlotChartsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FlotChartsAsset',
 */

namespace p2made\assets;

class FlotChartsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/pub',
			'js' => [
				'js/jquery.colorhelpers.min.js',
			],
		],
		'static' => [
			'baseUrl' => '',
			'js' => [
			],
		],
		'depends' => [
			'p2made\assets\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * ColorHelpersAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\ColorHelpersAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ColorHelpersAsset',
 */

namespace p2m\assets;

class ColorHelpersAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1-1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery-colorhelpers-jquery-colorhelpers-##-version-##',
			'js' => [
				'jquery.colorhelpers.min.js',
			],
		],
		'depends' => [
			'p2m\assets\flot\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

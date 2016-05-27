<?php
/**
 * ColorHelpersAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\ColorHelpersAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\ColorHelpersAsset',
 */

namespace p2made\assets;

class ColorHelpersAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.1-1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/jquery-colorhelpers-jquery-colorhelpers-##-version-##',
			'js' => [
				'jquery.colorhelpers.min.js',
			],
		],
		'depends' => [
			'p2made\assets\flot\FlotTooltipAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['published']['sourcePath']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

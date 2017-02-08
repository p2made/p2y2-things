<?php
/**
 * FlotCategoriesAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\flot\FlotCategoriesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\flot\FlotCategoriesAsset',
 */

namespace p2made\assets\flot; /* edit this if using elsewhere */

class FlotCategoriesAsset extends \p2made\assets\flot\FlotAssetBase
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.categories.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.categories.js',
			],
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

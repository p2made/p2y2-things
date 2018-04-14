<?php
/**
 * WowAsset.php
 *
 * Yii2 asset for WOW
 * https://github.com/matthieua/WOW
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\WowAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\WowAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\WowAsset',
 */

namespace p2m\assets;

class WowAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/WOW-##-version-##/dist',
			'js' => [
				'wow.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/wow/##-version-##',
			'js' => [
				'wow.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\AnimateAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * SimpleLineIconsAsset.php
 *
 * Yii2 asset for Simple Line Icons
 * http://simplelineicons.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\SimpleLineIconsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\SimpleLineIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SimpleLineIconsAsset',
 */

namespace p2m\assets;

class SimpleLineIconsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.4.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/simple-line-icons-##-version-##',
			'css' => [
				'css/simple-line-icons.css',
			],
			'js' => [],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/##-version-##',
			'css' => [
				'simple-line-icons.min.css',
			],
			'js' => [],
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

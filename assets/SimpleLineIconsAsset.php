<?php
/**
 * SimpleLineIconsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\SimpleLineIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\SimpleLineIconsAsset',
 */

namespace p2made\assets; /* edit this if using elsewhere */

class SimpleLineIconsAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.4.1';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@bower/simple-line-icons',
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
			'p2made\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

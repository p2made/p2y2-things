<?php
/**
 * AnimateAsset.php
 *
 * Yii2 asset for Animate CSS
 * https://daneden.github.io/animate.css/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\AnimateAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\AnimateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AnimateAsset',
 */

namespace p2m\assets;

class AnimateAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.5.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/drmonty/animate.css',
			'css' => [
				'css/animate.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/##-version-##',
			'css' => [
				'animate.min.css',
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

<?php
/**
 * RaphaelAsset.php
 *
 * Yii2 asset for Raphael
 * http://dmitrybaranovskiy.github.io/raphael/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\RaphaelAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\RaphaelAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\RaphaelAsset',
 */

namespace p2m\assets;

class RaphaelAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.7';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/raphael-##-version-##',
			'js' => [
				'raphael.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/raphael/##-version-##',
			'js' => [
				'raphael.min.js',
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

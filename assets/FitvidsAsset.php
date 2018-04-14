<?php
/**
 * FitvidsAsset.php
 *
 * Yii2 asset for jQuery FitVids
 * http://fitvidsjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\FitvidsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FitvidsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FitvidsAsset',
 */

namespace p2m\assets;

class FitvidsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.0';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/FitVids.js-##-version-##',
			'js' => [
				'jquery.fitvids.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fitvids/##-version-##',
			'js' => [
				'jquery.fitvids.min.js',
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

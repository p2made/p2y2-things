<?php
/**
 * JqueryCountToAsset.php
 *
 * Yii2 asset for jquery-countTo
 * https://github.com/mhuggins/jquery-countTo
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JqueryCountToAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryCountToAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryCountToAsset',
 */

namespace p2m\assets;

class JqueryCountToAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.0';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery-countTo-##-version-##',
			'js' => [
				'jquery.countTo.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.jsdelivr.net/jquery.countto/##-version-##',
			'js' => [
				'jquery.countTo.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\base\P2JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

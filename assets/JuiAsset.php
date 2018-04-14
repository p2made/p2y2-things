<?php
/**
 * JuiAsset.php
 *
 * Yii2 asset for jQuery UI
 * http://jqueryui.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JuiAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JuiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JuiAsset',
 */

namespace p2m\assets;

class JuiAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.12.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery',
			'js' => [
				'jquery-ui.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'ui/##-version-##/jquery-ui.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\base\P2JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * JuiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\JuiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\JuiAsset',
 */

namespace p2made\assets;

class JuiAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.11.4';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/jquery-ui',
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
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

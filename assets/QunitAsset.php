<?php
/**
 * QunitAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\QunitAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\QunitAsset',
 */

namespace p2made\assets;

class QunitAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.23.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/qunit/qunit',
			'css' => [
				'qunit.css',
			],
			'js' => [
				'qunit.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com/qunit',
			'css' => [
				'qunit-##-version-##.css',
			],
			'js' => [
				'qunit-##-version-##.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['css'][0]);
		$this->insertAssetVersion($this->resourceData['static']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

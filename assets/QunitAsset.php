<?php
/**
 * QunitAsset.php
 *
 * Yii2 asset for QUnit
 * http://qunitjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\QunitAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\QunitAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\QunitAsset',
 */

namespace p2m\assets;

class QunitAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.1';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery',
			'css' => [
				'qunit-##-version-##.css',
			],
			'js' => [
				'qunit-##-version-##.js',
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
			'p2m\assets\P2CoreAsset',
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

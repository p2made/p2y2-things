<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\MorrisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MorrisAsset',
 */

namespace p2made\assets;

class MorrisAsset extends \p2made\assets\base\P2AssetBundle
{
	private $version = '1.23.1';

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
				'qunit-' . $this->version . '.css',
			],
			'js' => [
				'qunit-' . $this->version . '.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

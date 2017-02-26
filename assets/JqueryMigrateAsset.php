<?php
/**
 * JqueryMigrateAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryMigrateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryMigrateAsset',
 */

namespace p2m\assets;

class JqueryMigrateAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.0.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/jquery-migrate',
			'js' => [
				'jquery-migrate.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'jquery-migrate-##-version-##.min.js',
			],
		],
		'depends' => [
			'p2m\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

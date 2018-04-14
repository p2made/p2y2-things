<?php
/**
 * JqueryMigrateAsset.php
 *
 * Yii2 asset for jQuery Migrate
 * http://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JqueryMigrateAsset
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

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/jquery',
			'js' => [
				'jquery-migrate-##-version-##.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'jquery-migrate-##-version-##.min.js',
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
		$this->insertAssetVersion($this->resourceData['published']['js'][0]);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

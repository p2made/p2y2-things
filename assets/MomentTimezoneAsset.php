<?php
/**
 * MomentTimezoneAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\MomentTimezoneAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MomentTimezoneAsset',
 */

namespace p2made\assets;

class MomentTimezoneAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.5.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/moment-timezone/build',
			'js' => [
				'moment-timezone.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment-timezone/##-version-##',
			'js' => [
				'moment-timezone.min.js',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

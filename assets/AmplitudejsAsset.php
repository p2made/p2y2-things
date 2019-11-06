<?php
/**
 * AmplitudeJsAsset.php
 *
 * Yii2 asset for AmplitudeJS
 * https://521dimensions.com/open-source/amplitudejs
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\AmplitudeJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\AmplitudeJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AmplitudeJsAsset',
 */

namespace p2m\assets;

class AmplitudeJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'amplitudejs';

	protected $packageVersion = '5.0.2';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/amplitudejs@##-version-##/dist',
		'sourcePath' => '@npm/amplitudejs/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-XNbCKm0IHmWzKrC7P4RWj/25uQuL3tuXGj2mdm7X9EnVswHsL57sh/Hk3Sn6x4b2',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'amplitude.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

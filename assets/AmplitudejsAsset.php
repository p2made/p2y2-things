<?php
/**
 * AmplitudejsAsset.php
 *
 * Yii2 asset for Amplitude JS
 * https://521dimensions.com/open-source/amplitudejs
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\AmplitudejsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\AmplitudejsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AmplitudejsAsset',
 */

namespace p2m\assets;

class AmplitudejsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/amplitudejs-##-version-##',
			'js' => [
				'js/amplitude.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * AmplitudejsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\AmplitudejsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AmplitudejsAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class AmplitudejsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/amplitudejs-##-version-##',
			'js' => [
				'js/amplitude.min.js',
			],
		],

		'depends' => [
			// depends like any other assets
			// or leave out if no depends
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

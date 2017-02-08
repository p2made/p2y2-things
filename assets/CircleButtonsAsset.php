<?php
/**
 * CircleButtonsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\CircleButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\CircleButtonsAsset',
 */

namespace p2made\assets;

class CircleButtonsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-p2y2-things/assets/lib/pub',
			'css' => [
				'css/circle-buttons.css',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

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
 * p2m\assets\CircleButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\CircleButtonsAsset',
 */

namespace p2m\assets;

class CircleButtonsAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/pub',
			'css' => [
				'css/circle-buttons.css',
			],
		],
		'depends' => [
			'p2m\assets\BootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

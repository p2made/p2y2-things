<?php
/**
 * CircleButtonsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\CircleButtonsAsset
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
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/pub',
			'css' => [
				'css/circle-buttons.css',
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

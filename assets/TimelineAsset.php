<?php
/**
 * TimelineAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\TimelineAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\TimelineAsset',
 */

namespace p2m\assets;

class TimelineAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-p2y2-things/assets/lib/pub',
			'css' => [
				'css/timeline.css',
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

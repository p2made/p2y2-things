<?php
/**
 * TimelineAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\TimelineAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\TimelineAsset',
 */

namespace p2made\assets;

class TimelineAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-p2y2-things/assets/lib/pub',
			'css' => [
				'css/timeline.css',
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

<?php
/**
 * TimelineAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\TimelineAsset
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
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/pub',
			'css' => [
				'css/timeline.css',
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

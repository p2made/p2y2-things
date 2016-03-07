<?php
/**
 * TimelineCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class TimelineCssAsset extends P2AssetBundle
{
	private $libVersion = '1.0.0';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/Timeline.css-1.0',
			'css' => [
				'css/timeline.css',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/timeline.css/' . $this->libVersion,
			'css' => [
				'timeline.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

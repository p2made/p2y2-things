<?php
/**
 * TimelineCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\TimelineCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\TimelineCssAsset',
 */

namespace p2made\assets;

class TimelineCssAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '1.0.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/Timeline.css-##-version-##',
			'css' => [
				'css/timeline.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/timeline.css/##-version-##',
			'css' => [
				'timeline.min.css',
			],
		],
	);

	public function init()
	{
		$this->insertAssetVersion($this->resourceData['published']['sourcePath']);
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * FlotSelectionAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FlotSelectionAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/flot-0.8.3',
			'js' => [
				'jquery.flot.selection.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3',
			'js' => [
				'jquery.flot.selection.min.js',
			],
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MorrisAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/morris.js-0.5.1',
		'pub' => [
			'css' => [
				'morris.css',
			],
			'js' => [
				'morris.min.js',
			],
		],
		'cdn' => [
			'css' => [
				'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
			],
			'js' => [
				'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
			],
		],
		'depends' => [
			'p2made\assets\RaphaelAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

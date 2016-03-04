<?php
/**
 * HolderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class HolderAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/holder-2.8.0',
			'js' => [
				'holder.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/holder/2.8.0',
			'js' => [
				'holder.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

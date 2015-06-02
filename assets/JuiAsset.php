<?php
/**
 * JuiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class JuiAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/jquery-ui-1.11.4',
		'pub' => [
			'js' => [
				'jquery-ui.min.js',
			],
		],
		'cdn' => [
			'js' => [
				'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

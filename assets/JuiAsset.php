<?php
/**
 * JuiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class JuiAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/jquery-ui-1.11.4',
			'js' => [
				'jquery-ui.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jquery#/ui/1.11.4',
			'js' => [
				'jquery-ui.min.js',
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

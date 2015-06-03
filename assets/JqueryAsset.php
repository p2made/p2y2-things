<?php
/**
 * JqueryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class JqueryAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/jquery',
			'js' => [
				'jquery-1.11.3.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'jquery#/',
			'js' => [
				'jquery-1.11.3.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

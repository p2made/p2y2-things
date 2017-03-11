<?php
/**
 * JplayerBlueMondayAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JplayerBlueMondayAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JplayerBlueMondayAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class JplayerBlueMondayAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.9.2';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/happyworm/jplayer/dist',
			'css' => [
				'skin/blue.monday/css/jplayer.blue.monday.min.css',
			],
		],

		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jplayer/##-version-##',
			'css' => [
				'skin/blue.monday/css/jplayer.blue.monday.min.css',
			],
		],

		'depends' => [
			'p2m\assets\jPlayer\JplayerAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

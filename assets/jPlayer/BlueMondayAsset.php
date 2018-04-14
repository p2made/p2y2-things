<?php
/**
 * BlueMondayAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\jPlayer\BlueMondayAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\jPlayer\BlueMondayAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\jPlayer\BlueMondayAsset',
 */

namespace p2m\assets\jPlayer;

class BlueMondayAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.9.2';

	protected $resourceData = array(
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
			'p2m\assets\P2CoreAsset',
			'p2m\assets\jPlayer\JplayerAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

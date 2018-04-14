<?php
/**
 * PinkFlagAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\jPlayer\PinkFlagAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\jPlayer\PinkFlagAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\jPlayer\PinkFlagAsset',
 */

namespace p2m\assets\jPlayer;

class PinkFlagAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.9.2';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/happyworm/jplayer/dist',
			'css' => [
				'skin/pink.flag/css/jplayer.pink.flag.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jplayer/##-version-##',
			'css' => [
				'skin/pink.flag/css/jplayer.pink.flag.min.css',
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

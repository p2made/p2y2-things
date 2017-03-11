<?php
/**
 * JplayerAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\jPlayer\JplayerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\jPlayer\JplayerAsset',
 */

namespace p2m\assets\jPlayer;

class JplayerAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.9.2';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/happyworm/jplayer/dist',
			'js' => [
				'jplayer/jquery.jplayer.min.js',
			],
		],

		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/jplayer/##-version-##',
			'js' => [
				'jplayer/jquery.jplayer.min.js',
			],
		],

		'depends' => [
			'p2m\assets\JqueryAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

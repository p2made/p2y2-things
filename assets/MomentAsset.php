<?php
/**
 * MomentAsset.php
 *
 * Yii2 asset for Moment
 * http://momentjs.com
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MomentAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentAsset',
 */

namespace p2m\assets;

class MomentAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.17.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/min',
			'js' => [
				'moment.min.js'
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/##-version-##',
			'js' => [
				'moment.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

<?php
/**
 * FitvidsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FitvidsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FitvidsAsset',
 */

namespace p2m\assets;

class FitvidsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/jquery.fitvids',
			'js' => [
				'jquery.fitvids.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fitvids/##-version-##',
			'js' => [
				'jquery.fitvids.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

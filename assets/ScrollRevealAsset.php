<?php
/**
 * ScrollRevealAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\ScrollRevealAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\ScrollRevealAsset',
 */

namespace p2made\assets; /* edit this if using elsewhere */

class ScrollRevealAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.3.2';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@bower/scrollreveal/dist',
			'css' => [],
			'js' => [
				'scrollreveal.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/##-version-##',
			'css' => [],
			'js' => [
				'scrollreveal.min.js',
			],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
/WWW/yii.development/vendor//scrollreveal.min.js

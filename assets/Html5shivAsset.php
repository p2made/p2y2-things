<?php
/**
 * Html5shivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class Html5shivAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/shiv',
			'js' => [
				'html5shiv-3.7.2/dist/html5shiv.min.js',
				'Respond-1.4.2/dest/respond.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/',
			'js' => [
				'html5shiv/3.7.2/html5shiv.min.js',
				'respond.js/1.4.2/respond.min.js',
			],
		],
		'jsOptions' => [
			'condition' => 'lte IE9',
			'position' => \yii\web\View::POS_HEAD,
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

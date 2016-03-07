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
	private $libVersion = '3.7.3';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/html5shiv/dist',
			'js' => [
				'html5shiv.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/html5shiv/' . $this->libVersion,
			'js' => [
				'html5shiv.min.js',
			],
		],
		'jsOptions' => [
			'condition' => 'lte IE9',
			'position' => \yii\web\View::POS_HEAD,
		],
		'depends' => [
			'p2made\assets\RespondAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}


https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js


/WWW/yii.development/vendor/bower/html5shiv/dist/html5shiv.min.js

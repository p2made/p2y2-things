<?php
/**
 * PrintShivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class PrintShivAsset extends P2AssetBundle
{
	private $libVersion = '3.7.3';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/html5shiv/dist',
			'js' => [
				'html5shiv-printshiv.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/html5shiv/' . $this->libVersion,
			'js' => [
				'html5shiv-printshiv.min.js',
			],
		],
		'jsOptions' => [
			'condition' => 'lte IE9',
			'media' => 'print',
			'position' => \yii\web\View::POS_HEAD,
		],
		'depends' => [
			'p2made\assets\Html5shivAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

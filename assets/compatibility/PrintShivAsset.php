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

namespace p2made\assets\compatibility;

class PrintShivAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/html5shiv/dist',
			'js' => [
				'html5shiv-printshiv.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3',
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

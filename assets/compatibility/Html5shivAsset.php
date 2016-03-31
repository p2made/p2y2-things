<?php
/**
 * Html5shivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\assets\compatibility;

class Html5shivAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/html5shiv/dist',
			'js' => [
				'html5shiv.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3',
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

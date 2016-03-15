<?php
/**
 * RespondAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets\compatibility;

class RespondAsset extends \p2made\assets\P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/respond/dest',
			'js' => [
				'respond.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2',
			'js' => [
				'respond.min.js',
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

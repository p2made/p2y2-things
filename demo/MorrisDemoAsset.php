<?php
/**
 * MorrisDemoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\theme\AssetDemo\demo;

class MorrisDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things/demo-files';

	public $js = [
		'morris-data.js'
	];
}

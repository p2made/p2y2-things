<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarPrintAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/fullcalendar-2.3.1',
			'css' => [
				'fullcalendar.print.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/fullcalendar/2.3.1',
			'css' => [
				'fullcalendar.print.css',
			],
		],
		'cssOptions' => [
			'media' => 'print'
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

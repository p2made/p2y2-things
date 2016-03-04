<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarPrintAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/fullcalendar-2.3.2',
			'css' => [
				'fullcalendar.print.css',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/fullcalendar/2.3.2',
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

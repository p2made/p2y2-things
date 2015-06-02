<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarPrintAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/fullcalendar-2.3.1',
		'pub' => [
			'css' => [
				'fullcalendar.print.css',
			],
		],
		'cdn' => [
			'css' => [
				'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css',
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

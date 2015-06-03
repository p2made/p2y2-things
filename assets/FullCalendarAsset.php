<?php
/**
 * FullCalendarAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarAsset extends P2AssetBundle
{
	/**
	 * the language the calender will be displayed in
	 * @var string ISO2 code for the wished display language
	 */
	public $language = null;

	/**
	 * [$autoGenerate description]
	 * @var boolean
	 */
	public $autoGenerate = true;

	/**
	 * tell the calendar, if you like to render google calendar events within the view
	 * @var boolean
	 */
	public $googleCalendar = false;

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/fullcalendar-2.3.1',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => 'cdnjs#/fullcalendar/2.3.1',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'depends' => [
			'p2made\assets\MomentAsset',
			'p2made\assets\FullCalendarPrintAsset',
			'p2made\assets\JuiAsset',
		],
	);

	/**
	 * @inheritdoc
	 */
	public function registerAssetFiles($view)
	{
		$language = $this->language ? $this->language : \Yii::$app->language;
		$cdnJs = 'fullcalendar/2.3.1/';
		if ($language != 'en-us'){
			$jsTemp = (P2AssetBundle::useCdn() ? $cdnJs : '') . "lang/{$language}.js";
			$this->js[] = $jsTemp;
		}

		if($this->googleCalendar){
			$jsTemp = (P2AssetBundle::useCdn() ? $cdnJs : '') . 'gcal.js';
			$this->js[] = $jsTemp;
		}

		parent::registerAssetFiles($view);
	}


	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

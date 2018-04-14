<?php
/**
 * FullCalendarAsset.php
 *
 * Yii2 asset for FullCalendar
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\FullCalendarAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FullCalendarAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FullCalendarAsset',
 */

namespace p2m\assets;

class FullCalendarAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.2.0';

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

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/fullcalendar-##-version-##',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/##-version-##',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\MomentAsset',
			'p2m\assets\FullCalendarPrintAsset',
			'p2m\assets\JuiAsset',
		],
	);

	/**
	 * @inheritdoc
	 */
	public function registerAssetFiles($view)
	{
		$language = $this->language ? $this->language : \Yii::$app->language;
		$cdnJs = 'fullcalendar/2.3.2/';

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

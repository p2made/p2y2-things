<?php
/**
 * FullCalendarAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FullCalendarAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FullCalendarAsset',
 */

namespace p2made\assets;

class FullCalendarAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '2.6.1';

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
		'published' => [
			'sourcePath' => '@vendor/bower/fullcalendar/dist',
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
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

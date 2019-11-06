<?php
/**
 * FullCalendarPrintAsset.php
 *
 * Yii2 asset for FullCalendar
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\FullCalendarPrintAsset
 */

/**
 * Load this asset with...
 * p2m\assets\FullCalendarPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FullCalendarPrintAsset',
 */

namespace p2m\assets;

class FullCalendarPrintAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'fullcalendar';

	protected $packageVersion = '3.10.1';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/fullcalendar@##-version-##/dist',
		'sourcePath' => '@npm/fullcalendar/dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-Q4MjQXexIIZhDecCSVc79g7WtM16+sjB6ubWmtL2tM7bOFLC38NjV8SlNRcy/Xpl',
				'crossorigin' => 'anonymous',
				'media' => 'print'
			],
		],
		'css' => [
			'fullcalendar.print.min.css',
		],
		'cssOptions' => [
			'media' => 'print'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}

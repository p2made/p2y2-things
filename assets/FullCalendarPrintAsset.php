<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\FullCalendarPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FullCalendarPrintAsset',
 */

namespace p2made\assets;

class FullCalendarPrintAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.1.0';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/fullcalendar/dist',
			'css' => [
				'fullcalendar.print.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/##-version-##',
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

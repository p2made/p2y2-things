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
 * p2m\assets\FullCalendarPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FullCalendarPrintAsset',
 */

namespace p2m\assets;

class FullCalendarPrintAsset extends \p2m\assets\base\P2AssetBundle
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

<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
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
	protected $version = '2.6.1';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/fullcalendar/dist',
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
		$this->insertAssetVersion($this->resourceData['static']['baseUrl']);

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

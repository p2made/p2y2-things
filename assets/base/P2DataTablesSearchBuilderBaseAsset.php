<?php
/**
 * P2DataTablesSearchBuilderBaseAsset.php
 *
 * Yii2 base asset for DataTables/searchBuilder
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2DataTablesSearchBuilderBaseAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2DataTablesSearchBuilderBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2DataTablesSearchBuilderBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2DataTablesSearchBuilderBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/searchbuilder/1.8.2';

	public $css = [
		'css/searchBuilder.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-c+17EpI1t/ZAjBoElPoW3nsmP/5974nO3qiFjdyE/JLy0pDYToN1xM+cdrRNTcab',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.searchBuilder.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-SZjRT2FoEIHY6x2Ja59fXuRxb9tFVTEq9iXTHLglPW1ZH8Uel5uyi/grp/MuR32Q',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

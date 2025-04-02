<?php
/**
 * P2DataTablesAutoFillBaseAsset.php
 *
 * Yii2 base asset for DataTables/Autofill
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2DataTablesAutoFillBaseAsset
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
 * p2m\assets\base\P2DataTablesAutoFillBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2DataTablesAutoFillBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2DataTablesAutoFillBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/autofill/2.7.0';

	public $css = [
		'css/autoFill.bootstrap5.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-G1dqrS0RLl+qnWuET1U0A6JSB6ybTRgzjeoJHQHf3qXKTHdbBj4BQkL0+uIG62mX',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/dataTables.autoFill.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-4ExRAjt8e0JM0VUvaS+tav0eS4hkbepBLqygE2qk9poZZmC+s7Da+dp8Wzl3Nt6Z',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2DataTablesBootstrap5Asset',
	];
}

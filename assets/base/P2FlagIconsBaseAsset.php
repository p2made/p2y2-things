<?php
/**
 * P2FlagIconsBaseAsset.php
 *
 * Yii2 asset for flag-icons
 * https://flagicons.lipis.dev/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2FlagIconsBaseAsset
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
 * p2m\assets\base\P2FlagIconsBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2FlagIconsBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2FlagIconsBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/flag-icons@7.3.2';

	public $css = [
		'css/flag-icons.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-tyPeBlnZW2qWbAF1hQiCt9qo6SOgOSymvJBum+FrrwI=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

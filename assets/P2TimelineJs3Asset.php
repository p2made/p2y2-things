<?php
/**
 * P2TimelineJs3Asset.php
 *
 * Yii2 asset for timelinejs3
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2TimelineJs3Asset
 */

/**
 * Load this asset with...
 * p2m\assets\P2TimelineJs3Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2TimelineJs3Asset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2TimelineJs3Asset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/timelinejs3@3.4.0/compiled';

	public $css = [
		'css/timeline.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha256-I/QrFk5H/D5HJK2iWhUVCCvc5OZl28OFCtswQeu94tc=',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/timeline-min.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha256-07rESVVuwRDyYL5ZgJNJUtsbFypjUpNF4mg41dcOyWY=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

<?php
/**
 * P2PdfmakeBaseAsset.php
 *
 * Yii2 base asset for pdfmake
 * http://pdfmake.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2PdfmakeBaseAsset
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
 * p2m\assets\base\P2PdfmakeBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2PdfmakeBaseAsset',
 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2PdfmakeBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7';

	public $js = [
		'pdfmake.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-VFQrHzqBh5qiJIU0uGU5CIW3+OWpdGGJM9LBnGbuIH2mkICcFZ7lPd/AAtI7SNf7',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

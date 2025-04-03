<?php
/**
 * P2PdfMakeAsset.php
 *
 * Yii2 asset for pdfmake
 * http://pdfmake.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2PdfMakeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2PdfMakeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2PdfMakeAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2PdfMakeAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7';

	public $js = [
		'vfs_fonts.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-/RlQG9uf0M2vcTw3CX7fbqgbj/h8wKxw7C3zu9/GxcBPRKOEcESxaxufwRXqzq6n',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2PdfmakeBaseAsset',
	];
}

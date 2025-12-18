<?php
/**
 * P2BootstrapIconsCdnAsset.php
 *
 * Yii2 asset with additions for Bootstrap Icons
 * https://icons.getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapIconsCdnAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####      IT IS REGISTERED FOR YOU BY...       ##### ^ #####
 * ##### ^ #####      p2m\assets\P2CoreAsset               ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * In app config set...

	'components' => [
		'assetManager' => [
			...
			'bundles' => [
				...
				'yii\bootstrap5\BootstrapIconAsset' => [
					'class' => 'p2m\assets\base\P2BootstrapIconsCdnAsset',
				],
			],
		],
		...
	],

 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2BootstrapIconsCdnAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font';

	public $css = [
		'bootstrap-icons.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\base\P2BootstrapCdnAsset',
	];
}

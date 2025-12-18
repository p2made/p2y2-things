<?php
/**
 * P2JqueryCdnAsset.php
 *
 * Yii2 asset for JQuery
 * https://jquery.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2JqueryCdnAsset
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
				'yii\web\JqueryAsset' => [
					'class' => 'p2m\assets\base\P2JqueryCdnAsset',
				],
			],
		],
		...
	],

 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2JqueryCdnAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//code.jquery.com/';

	public $js = [
		'jquery-3.7.1.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs',
		'crossorigin' => 'anonymous',
	];

	public $depends = [];
}

<?php
/**
 * P2BootstrapCdnAsset.php
 *
 * Yii2 asset with additions for Bootstrap
 * https://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapCdnAsset
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
				'yii\bootstrap5\BootstrapAsset' => [
					'class' => 'p2m\assets\base\P2BootstrapCdnAsset',
				],
				...
			],
		],
		...
	],

 */

namespace p2m\assets\base;

use yii\web\AssetBundle;

class P2BootstrapCdnAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist';

	public $css = [
		'css/bootstrap.min.css',
	];

	public $cssOptions = [
		'integrity' => 'sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB',
		'crossorigin' => 'anonymous',
	];

	public $depends = [];
}

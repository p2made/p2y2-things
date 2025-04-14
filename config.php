<?php
$bootstrapVersion = '5.3.5';
$bootstrapCssIntegrity = 'sha256-zzPh8NflvEInFbVSzLYGVMLOn0j0kfsjq/UlNeMBRYw=';
$bootstrapJsIntegrity = 'sha256-ORBCb//WwUWwNh+EjsvO97snO3mAJ1+jhMzrlPBTYSQ=';
$jqueryVersion = '3.7.1';
$jqueryIntegrity = 'sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs';

return [
	'components' => [
		'assetManager' => [
			'basePath' => '@webroot/assets',
			'baseUrl' => '@web/assets',
			'bundles' => [
				'yii\bootstrap5\BootstrapAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@' . $bootstrapVersion . '/dist/',
					'css' => [
						'css/bootstrap.min.css',
					],
					'cssOptions' => [
						'integrity' => $bootstrapCssIntegrity,
						'crossorigin' => 'anonymous',
					],
				],
				'yii\bootstrap5\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@' . $bootstrapVersion . '/dist/',
					'js' => [
						'js/bootstrap.bundle.min.js',
					],
					'jsOptions' => [
						'integrity' => $bootstrapJsIntegrity,
						'crossorigin' => 'anonymous',
					],
				],
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//code.jquery.com/',
					'js' => [
						'jquery-' . $jqueryVersion . '.min.js',
					],
					'jsOptions' => [
						'integrity' => $jqueryIntegrity,
						'crossorigin' => 'anonymous',
					],
				],
			],
		],
	],
];

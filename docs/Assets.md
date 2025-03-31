# P2Y2 Assets

Resource | Asset Class
-------- | -----------
[P2BootstrapIconsAsset](https://icons.getbootstrap.com/) | `p2m\assets\P2BootstrapIconsAsset`
P2CircleButtonsAsset | `p2m\assets\CircleButtonsAsset`

## Overrides

To override Bootstap & jQuery with CDN versions (which I recommend) include the following in your configuration...

```
<?php
return [
	...
	'components' => [
		'assetManager' => [
			...
			'bundles' => [
				'yii\bootstrap5\BootstrapAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/',
					'css' => [
						'css/bootstrap.min.css',
					],
					'cssOptions' => [
						'integrity' => 'sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH',
						'crossorigin' => 'anonymous',
					],
				],
				'yii\bootstrap5\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/',
					'js' => [
						'js/bootstrap.bundle.min.js',
					],
					'jsOptions' => [
						'integrity' => 'sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz',
						'crossorigin' => 'anonymous',
					],
				],
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'baseUrl' => '//code.jquery.com/',
					'js' => [
						'jquery-3.7.1.min.js',
					],
					'jsOptions' => [
						'integrity' => 'sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs',
						'crossorigin' => 'anonymous',
					],
				],
			],
		],
		...
	],
];
```

## P2BootstrapIconsAsset

Loads [Bootstrap Icons](https://icons.getbootstrap.com/) with a small additional CSS to provide an icon for BlueSky.

Load with...

```
p2m\assets\P2BootstrapIconsAsset::register($this);
```

or specify as a dependency with...

```
	'p2m\assets\P2BootstrapIconsAsset',
```

The class for BlueSky is `bi-reddit `. Use it like...

```
	<i class="bi bi-reddit"></i>
```

## P2CircleButtonsAsset

Load with...

```
p2m\assets\ P2CircleButtonsAsset::register($this);
```

or specify as a dependency with...

```
	'p2m\assets\ P2CircleButtonsAsset',
```

**P2CircleButtonsAsset** provides three additional classes for [Bootstrap](https://getbootstrap.com/docs/5.3/components/buttons/) buttons...

```
.btn-circle
.btn-circle.btn-lg
.btn-circle.btn-xl
```

Use them the same way you use other Bootstrap button classes...

```
<button type="button" class="btn-circle">Base class</button>
<button type="button" class="btn-circle btn-lg">Base class</button>
<button type="button" class="btn-circle btn-xl">Base class</button>

<a class="btn btn-circle" href="#" role="button">Link</a>
<a class="btn btn-circle btn-lg" href="#" role="button">Link</a>
<a class="btn btn-circle btn-xl" href="#" role="button">Link</a>
```


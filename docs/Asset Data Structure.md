# P2Y2 Asset Data Structure

P2Y2 asset bundles have their data stored in 3 properties...

```
	protected $packageName; // string

	protected $packageVersion; // = '0.0.0'

	protected $packageData = [];
```

`$packageName` is the name of the package the bundle is built around.

`$packageVersion` is the version of that package.

`$packageData` holds the data that populates the Yii `AssetBundle` properties using the property names as keys.

Where an `AssetBundle` property is the same for both `static` & `published` resources, those properties should be in the first level of the array.

Where an `AssetBundle` property differs for `static` & `published` resources, those properties should be elements in sub-arrays called `static` & `published`.

`baseUrl` is only used  on `static` resources & `sourcePath` only used  on `published ` resources, so those are safely put at the in the first level of the array.

```
	protected $packageData = [
		'baseUrl' => 'baseUrl',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [],
			'cssOptions' => [],
			'js' => [],
			'jsOptions' => [],
			'publishOptions' => [],
		],
		'published' => [
			'css' => [],
			'cssOptions' => [],
			'js' => [],
			'jsOptions' => [],
			'publishOptions' => [],
		],
		'css' => [],
		'cssOptions' => [],
		'js' => [],
		'jsOptions' => [],
		'publishOptions' => [],
		'depends' => [],
	];
```

P2Y2 asset bundles only ever use *one* of `` or `` so one can usually be omitted, with it's properties in the first level of the array...

```
	protected $packageData = [
		'baseUrl' => 'baseUrl',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [],
			'cssOptions' => [],
			'js' => [],
			'jsOptions' => [],
			'publishOptions' => [],
		],
		'css' => [],
		'cssOptions' => [],
		'js' => [],
		'jsOptions' => [],
		'publishOptions' => [],
		'depends' => [],
	];
```

In the [very] rare case where an asset bundle has more than one `css` file &/or more than one `js` file, **and** those files have different options, the files need to be specified so that files & options are correctly paired. The different options are most likely when the files are being pulled from a CDN & using subresource integrity. Example...

```
		'static' => [
			'js' => [
				[
					'js/jsfile1.js'
					'integrity' => 'hash-1',
					'crossorigin' => 'anonymous',
				],
				[
					'js/jsfile2.js'
					'integrity' => 'hash-2',
					'crossorigin' => 'anonymous',
				],
			],
		],
```

### Extreme expanded sample array...

```
	protected $packageData = [
		'baseUrl' => 'baseUrl',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [
				'css/cssfile.css',
				[
					'css/cssfile.css'
					'integrity' => 'static-hash', // iff css has hash[s]
					'crossorigin' => 'anonymous', // iff css has hash[s]
				],
			],
			'cssOptions' => [
				'integrity' => 'static-hash', // iff css has hash[s]
				'crossorigin' => 'anonymous', // iff css has hash[s]
			],
			'js' => [
				'js/jsfile.js',
				[
					'js/jsfile.js'
					'integrity' => 'static-hash', // iff js has hash[s]
					'crossorigin' => 'anonymous', // iff js has hash[s]
				],
			],
			'jsOptions' => [
				'integrity' => 'static-hash', // iff js has hash[s]
				'crossorigin' => 'anonymous', // iff js has hash[s]
			],
			'publishOptions' => [
			],
		],
		'published' => [
			'css' => [
				'css/cssfile.css',
			],
			'cssOptions' => [
			],
			'js' => [
				'js/jsfile.js',
			],
			'jsOptions' => [
			],
			'publishOptions' => [
			],
		],
		'css' => [
			'css/cssfile.css',
		],
		'cssOptions' => [
		],
		'js' => [
			'js/jsfile.js',
		],
		'jsOptions' => [
		],
		'publishOptions' => [
		],
		'depends' => [
			'some\useful\ThingAsset',
		],
	];
```




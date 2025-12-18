<?php
/**
 * P2BootswatchAsset.php
 *
 * Yii2 asset with additions for Bootswatch themes
 * https://bootswatch.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2BootswatchAsset
 */

/**
 * Load this asset with...

p2m\assets\P2BootswatchAsset::register($this);

 * or...

use p2m\assets\P2BootswatchAsset;
P2BootswatchAsset::register($this);

 * Specify as a dependency with...

		'p2m\assets\P2BootswatchAsset',

 * Set in app config...

	'params' => [
		'p2.bootswatch.theme' => 'theme',
		...
	],

 * Where 'theme' is one of the Bootswatch theme names.
 */

/**
	'brite',
	'cerulean',
	'cosmo',
	'cyborg',
	'darkly',
	'flatly',
	'journal',
	'litera',
	'lumen',
	'lux',
	'materia',
	'minty',
	'morph',
	'pulse',
	'quartz',
	'sandstone',
	'simplex',
	'sketchy',
	'slate',
	'solar',
	'spacelab',
	'superhero',
	'united',
	'vapor',
	'yeti',
	'zephyr',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2BootswatchAsset extends AssetBundle
{
	//public string $theme = 'spacelab'; // default if not provided
	//public string $theme = 'brite';
	//public string $theme = 'cerulean';
	//public string $theme = 'cosmo';
	public string $theme = 'cyborg';
	//public string $theme = 'darkly';
	//public string $theme = 'flatly';
	//public string $theme = 'journal';
	//public string $theme = 'litera';
	//public string $theme = 'lumen';
	//public string $theme = 'lux';
	//public string $theme = 'materia';
	//public string $theme = 'minty';
	//public string $theme = 'morph';
	//public string $theme = 'pulse';
	//public string $theme = 'quartz';
	//public string $theme = 'sandstone';
	//public string $theme = 'simplex';
	//public string $theme = 'sketchy';
	//public string $theme = 'slate';
	//public string $theme = 'solar';
	//public string $theme = 'spacelab';
	//public string $theme = 'superhero';
	//public string $theme = 'united';
	//public string $theme = 'vapor';
	//public string $theme = 'yeti';
	//public string $theme = 'zephyr';
	public string $version = '5.3.8';

	public $sourcePath = null;

	public $baseUrl;

	public $css = [
		'bootstrap.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapAsset',
	];

	public function init()
	{

		//$theme = $this->bootswatchTheme;
		$theme = \Yii::$app->params['p2.bootswatch.theme'] ?? $this->theme;
		if (!$theme) {
			return; // empty/false => keep normal Bootstrap CSS
		}

		//$theme = $this->theme;
		$version = $this->version;
		$this->baseUrl = 'https://cdn.jsdelivr.net/npm/bootswatch@'
			. $version . '/dist/' . $theme;

		parent::init();
	}
}

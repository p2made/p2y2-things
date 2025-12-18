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

use p2m\assets\P2BootstrapAsset;

final class P2BootswatchAsset extends P2BootstrapAsset
{
	public string $bootswatchTheme = 'cerulean'; // default if not provided
	public string $version = '5.3.8';

	public function init()
	{
		parent::init();

		$theme = $this->bootswatchTheme;
		//$theme = \Yii::$app->params['p2.bootswatch.theme'] ?? $this->bootswatchTheme;
		if (!$theme) {
			return; // empty/false => keep normal Bootstrap CSS
		}

		$version = $this->version;
		//$version = $this->version ?? null; // however you store it (registry/hydrator)
		if (!$version) {
			throw new \LogicException(static::class . ': missing Bootstrap version for Bootswatch');
		}

		$css = 'https://cdn.jsdelivr.net/npm/bootswatch@' . $version . '/dist/' . $theme . '/bootstrap.min.css';

		// Replace Bootstrap CSS with Bootswatch CSS (same filename/path as Bootstrap)
		$this->css = [$css];
		//$this->css = ["//cdn.jsdelivr.net/npm/bootswatch@$version/dist/$theme/bootstrap.min.css"];
	}
}

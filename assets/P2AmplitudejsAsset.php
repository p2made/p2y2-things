<?php
/**
 * P2AmplitudejsAsset.php
 *
 * Yii2 asset for AmplitudeJS
 * https://521dimensions.com/open-source/amplitudejs
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2AmplitudejsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\P2AmplitudejsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2AmplitudejsAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2AmplitudejsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.jsdelivr.net/npm/amplitudejs@5.3.2/dist';

	public $css = [
		'amplitude.min.js',
	];

	public $cssOptions = [
		'integrity' => 'sha256-k9ynzmYzFiZC/rmY0I9VYDWOwFeODdJEzluENN5pLcg=',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}

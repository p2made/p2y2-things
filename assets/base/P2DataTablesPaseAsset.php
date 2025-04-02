<?php
/**
 * P2DataTablesBaseAsset.php
 *
 * Yii2 base asset for DataTables
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\P2DataTablesBaseAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 *
 * 3. Remove all unused variable blocks
 * 4. Replace all placeholders (wrapped in underscores '_') with values
 * 5. Delete this comment block
 */

/**
 * Load this asset with...
 * p2m\assets\P2DataTablesBaseAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\P2DataTablesBaseAsset',
 */

namespace p2m\assets;

use yii\web\AssetBundle;

class P2DataTablesBaseAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = '//cdn.datatables.net/2.2.2';

	public $js = [
		'js/dataTables.min.js',
	];

	public $jsOptions = [
		'integrity' => 'sha384-AenwROccLjIcbIsJuEZmrLlBzwrhvO94q+wm9RwETq4Kkqv9npFR2qbpdMhsehX3',
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'_dependancy_',
	];
}

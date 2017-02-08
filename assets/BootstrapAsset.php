<?php
/**
 * BootstrapAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\assets\BootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\BootstrapAsset',
 */

namespace p2made\assets;

class BootstrapAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '3.3.7';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@bower/bootstrap/dist',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/bootstrap/##-version-##',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'depends' => [
			'p2made\assets\base\BootstrapPluginAsset',
		],
	);

	public function init()
	{
		if(isset(\Yii::$app->params['p2assets']['bootswatchTheme'])) {
			$themeName = \Yii::$app->params['p2assets']['bootswatchTheme'];
			$this->resourceData['sourcePath'] = '@vendor/thomaspark/bootswatch/' . $themeName;
			$this->resourceData['published']['baseUrl'] = [
				'bootswatch/##-version-##/' . $themeName,
			];
			$this->resourceData['published']['css'] = [
				'bootstrap.min.css',
			];
			$this->resourceData['static']['css'] = [
				'bootstrap.min.css',
			];
		}

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/* params
	'p2assets' => [
		'useStatic' => true, // false or not set to use published assets
		'bootswatchTheme' = 'cerulean', // set to _one_ of:
			// 'cerulean', 'cosmo', 'cyborg', 'darkly',
			// 'flatly', 'journal', 'lumen', 'paper',
			// 'readable', 'sandstone', 'simplex', 'slate',
			// 'spacelab', 'superhero', 'united', 'yeti',
	],
*/

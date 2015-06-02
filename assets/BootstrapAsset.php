<?php
/**
 * BootstrapAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class BootstrapAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/bootstrap-3.3.4/dist',
		'pub' => [
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'cdn' => [
			'css' => [
				'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			],
		],
	);

	public function init()
	{
		if(isset(\Yii::$app->params['p2assets']['bwTheme'])) {
			$themeName = \Yii::$app->params['p2assets']['bwTheme'];
			$this->resourceData['sourcePath'] = '@vendor/p2made/yii2-asset-collection/assets/lib/bootswatch-3.3.4-1/' . $themeName;
			$this->resourceData['pub-css'] = [
				'bootstrap.min.css',
			];
			$this->resourceData['cdn-css'] = [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/' . $themeName . '/bootstrap.min.css',
			];
		}

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/* params
	'p2assets' => [
		'useCdn' => true, // false or not set to use published assets
		'bwTheme' = 'cerulean', // set to one of:
									'cerulean', 'cosmo', 'cyborg', 'darkly',
									'flatly', 'journal', 'lumen', 'paper',
									'readable', 'sandstone', 'simplex', 'slate',
									'spacelab', 'superhero', 'united', 'yeti',
	],
*/

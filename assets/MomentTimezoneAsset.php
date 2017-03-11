<?php
/**
 * MomentTimezoneAsset.php
 *
 * Yii2 asset for Moment Timezone
 * http://momentjs.com/timezone/
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneAsset',
 */

namespace p2m\assets;

class MomentTimezoneAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.5.11';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/builds',
			'js' => [
				'moment-timezone.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment-timezone/##-version-##',
			'js' => [
				'moment-timezone.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

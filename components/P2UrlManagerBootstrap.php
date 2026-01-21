<?php
/**
 * P2UrlManagerBootstrap.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-things
 * @class \p2m\components\P2UrlManagerBootstrap
 */

namespace p2m\components;

use Yii;
use yii\base\BootstrapInterface;

class P2UrlManagerBootstrap implements BootstrapInterface
{
	public function bootstrap($app)
	{
		// Skip bootstrap when running in console
		if (Yii::$app->request instanceof \yii\console\Request) {
			return;
		}

		$scheme = Yii::$app->request->isSecureConnection ? 'https' : 'http';
		$host = Yii::$app->request->hostName;

		Yii::$app->homeUrl = $scheme . '://' . $host . '/';
	}
}

<?php
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

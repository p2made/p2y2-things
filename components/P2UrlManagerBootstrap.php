<?php
namespace common\components;

use Yii;
use yii\base\BootstrapInterface;

class P2UrlManagerBootstrap implements BootstrapInterface
{
	public function bootstrap($app)
	{
		$scheme = Yii::$app->request->isSecureConnection ? 'https' : 'http';
		$host = Yii::$app->request->hostName;

		Yii::$app->homeUrl = $scheme . '://' . $host;
	}
}

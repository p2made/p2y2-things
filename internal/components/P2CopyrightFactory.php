<?php
/**
 * P2CopyrightFactory.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Factory for creating P2Copyright objects.
 *
 * @package p2made/p2y2-things
 * @class \p2m\internal\components\P2CopyrightFactory
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\components;

use Yii;

class P2CopyrightFactory
{
	public static function fromParams(): P2CopyrightFactory
	{
		$params = Yii::$app->params['p2ip'] ?? [];

		return new P2CopyrightFactory(
			$params['author']    ?? '',
			$params['copyright'] ?? '',
			$params['homepage']  ?? '#'
		);
	}

	public static function copyright(): string
	{
		return (string) P2CopyrightFactory::fromParams();
	}

	public static function license(): string
	{
		return '';
	}

	public static function c(): string
	{
		return static::copyright();
	}

	public static function l(): string
	{
		return static::license();
	}




}

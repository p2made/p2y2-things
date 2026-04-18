<?php
/**
 * api/P2AssetFactory.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\api\P2AssetFactory
 * @package p2made/p2y2-things
 */

/**
 * @api
 * Sub-class to use
 */

namespace p2m\api;

use Yii;
use p2m\internal\helpers\P2IconFactory;
use p2m\api\P2Icon;
use p2m\api\P2Image;

abstract class P2AssetFactory extends P2IconFactory
{
	abstract protected static function imagePath(string $name, array $options = []): string;

	protected static function iconClass(): string
	{
		return P2Icon::class;
	}

	protected static function imageClass(): string
	{
		return P2Image::class;
	}

	/**
	 * Creates a new P2Image
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2Image
	 */
	public static function img(string $name, array $options = []): P2Image
	{
		$assetClass = static::assetClass();
		$asset = $assetClass::register(Yii::$app->view);

		$src = $asset->baseUrl . '/' . ltrim(static::imagePath($name, $options), '/');

		unset($options['size'], $options['format']);

		$imageClass = static::imageClass();

		return new $imageClass(
			static::$cssPrefix,
			static::$sizePrefix,
			$src,
			$name,
			$options
		);
	}

	/**
	 * Inherited functions
	public static function icon(string $name, $options = []): P2Icon
	public static function i(string $name, $options = []): P2Icon
	public static function circle(P2Icon $icon, array $options = []): P2IconBlock
	public static function c(P2Icon $icon, array $options = []): P2IconBlock
	public static function square(P2Icon $icon, array $options = []): P2IconBlock
	public static function s(P2Icon $icon, array $options = []): P2IconBlock
	 */
}

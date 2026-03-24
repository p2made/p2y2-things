<?php
/**
 * P2PicsumImageFactory.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Factory for creating Picsum image objects and collections.
 *
 * @package p2made/p2y2-things
 * @class \p2m\internal\helpers\P2PicsumImageFactory
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\base\InvalidArgumentException;

abstract class P2PicsumImageFactory
{
	/**
	 * Create a new Picsum image.
	 */
	public static function image(int $width, ?int $height = null, ?array $options = null): P2PicsumImage
	{
		return new P2PicsumImage($width, $height, $options);
	}

	/**
	 * Create a new Picsum image.
	 */
	public static function i(int $width, ?int $height = null, ?array $options = null): P2PicsumImage
	{
		return static::image($width, $height, $options);
	}

	public static function id(int $id, int $width, ?int $height = null, ?array $options = null): P2PicsumImage
	{
		return static::image($width, $height, $options)->id($id);
	}

	public static function seed(string $seed, int $width, ?int $height = null, ?array $options = null): P2PicsumImage
	{
		return static::image($width, $height, $options)->seed($seed);
	}

	public static function s(string $seed, int $width, ?int $height = null, ?array $options = null): P2PicsumImage
	{
		return static::seed($seed, $width, $height, $options);
	}

	/**
	 * Create a collection of distinct random images.
	 */
	public static function random(int $max, int $width, ?int $height = null, ?array $options = null): P2PicsumImageCollection
	{
		if ($max < 1) {
			throw new InvalidArgumentException('P2PicsumImageFactory::random() requires $max to be >= 1.');
		}

		$images = [];

		for ($i = 1; $i <= $max; $i++) {
			$images[] = static::image($width, $height, $options)
				->__allowRandomFromFactory()
				->__randomFromFactory($i);
		}

		return new P2PicsumImageCollection($images);
	}

	/**
	 * Create a collection of distinct random images.
	 */
	public static function r(int $max, int $width, ?int $height = null, ?array $options = null): P2PicsumImageCollection
	{
		return static::random($max, $width, $height, $options);
	}
}

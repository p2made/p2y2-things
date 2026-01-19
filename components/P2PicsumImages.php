<?php
/**
 * P2PicsumImages.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

// https://picsum.photos/


/**
 * @package p2made/p2y2-things
 * @class \p2m\components\P2PicsumImages
 */

namespace p2m\components;

use yii\base\InvalidArgumentException;

class P2PicsumImages
{
	const PICSUM_URL   = 'https://picsum.photos/';
	const DEFAULT_SEED = 'p2made';
	const ID_STEM      = '/id';
	const SEED_STEM    = '/seed';
	const GRAYSCALE    = 'grayscale';
	const BLUR         = 'blur';
	const RANDOM       = 'random';

	public static string $picsumUrl = 'https://picsum.photos/';

	public static function image(int $width, int $height): string
	{
		return static::seededImage($width, $height, '');
	}

	public static function seededImage(int $width, int $height, string $seed = 'p2made'): string
	{
		if ($width < 1 || $height < 1) {
			throw new InvalidArgumentException('P2PicsumImages::img() requires width and height to be > 0.');
		}

		$baseUrl = self::$picsumUrl;

		if ($seed !== '') {
			$baseUrl .= 'seed/' . rawurlencode($seed) . '/';
		}

		return $baseUrl . $width . '/' . $height;
	}

	/**
	 * Shortcut for `image()` method
	 * @param int $width
	 * @param int $height
	 * @return string
	 * @see image()
	 */
	public static function i(int $width, int $height)
	{
		return static::image($width, $height);
	}

	/**
	 * Shortcut for `seededImage()` method
	 * @param int $width
	 * @param int $height
	 * @param string $seed
	 * @return string
	 * @see seededImage()
	 */
	public static function s(int $width, int $height, string $seed = 'p2made')
	{
		return static::seededImage($width, $height, $seed);
	}
}

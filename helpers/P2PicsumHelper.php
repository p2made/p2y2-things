<?php
/**
 * P2PicsumHelper.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-things
 * @class \p2m\helpers\P2PicsumHelper
 */

namespace p2m\helpers;

use yii\base\InvalidArgumentException;

class P2PicsumHelper
{
	public static string $picsumUrl = 'https://picsum.photos/';

	public static function img(int $width, int $height, ?string $seed = null): string
	{
		if ($width < 1 || $height < 1) {
			throw new InvalidArgumentException('P2PicsumHelper::img() requires width and height to be > 0.');
		}

		$baseUrl = self::$picsumUrl;

		if ($seed !== null && $seed !== '') {
			$baseUrl .= 'seed/' . rawurlencode($seed) . '/';
		}

		return $baseUrl . $width . '/' . $height;
	}
}

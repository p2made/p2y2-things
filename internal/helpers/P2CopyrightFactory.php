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
 * @class \p2m\internal\helpers\P2CopyrightFactory
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use Yii;
use yii\base\InvalidArgumentException;

abstract class P2CopyrightFactory
{
	protected static function __readFromParams(): array
	{
		$params = Yii::$app->params['p2params']['ip'] ?? null;
		if (!is_array($params)) {
			throw new InvalidArgumentException(
				'P2Copyright could not find params at Yii::$app->params["p2params"]["ip"].'
			);
		}

		return $params;
	}

	public static function __copyright(?array $copyrightData = null): P2Copyright
	{
		$data = $copyrightData ?? static::__readFromParams();

		$author = isset($data['author']) ? trim((string)$data['author']) : '';
		if ($author === '') {
			throw new InvalidArgumentException('P2Copyright requires a non-empty "author".');
		}

		$year = isset($data['year']) ? trim((string)$data['year']) : '';
		if ($year === '') {
			throw new InvalidArgumentException('P2Copyright requires a non-empty "year".');
		}

		return new P2Copyright($data);
	}

	public static function copyright(?array $copyrightData = null): P2Copyright
	{
		return static::__copyright($copyrightData)->__copyright();
	}

	public static function c(?array $copyrightData = null): P2Copyright
	{
		return static::copyright($copyrightData);
	}

	public static function license(?array $copyrightData = null): P2Copyright
	{
		return static::__copyright($copyrightData)->license();
	}

	public static function l(?array $copyrightData = null): P2Copyright
	{
		return static::license($copyrightData);
	}
}

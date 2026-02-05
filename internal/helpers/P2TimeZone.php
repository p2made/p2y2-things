<?php
/**
 * P2TimeZone.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2TimeZone
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use DateTime;
use DateTimeZone;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;

class P2TimeZone
{
	/**
	 * Get all of the time zones with the offsets sorted by their offset.
	 *
	 * @throws InvalidParamException
	 * @return array
	 *
	 */
	public static function getAll()
	{
		$timeZones = [];
		$timeZoneIdentifiers = DateTimeZone::listIdentifiers();

		foreach ($timeZoneIdentifiers as $timeZone) {
			$date = new DateTime('now', new DateTimeZone($timeZone));
			$offset = $date->getOffset() / 60 / 60;
			$timeZones[] = [
				'timezone' => $timeZone,
				'name' => "{$timeZone} (UTC " . ($offset > 0 ? '+' : '') . "{$offset})",
				// As of PHP 8.1 array keys cannot be float. Offset is used for sorting only
				'offset' => $offset * 100,
			];
		}

		ArrayHelper::multisort($timeZones, 'offset', SORT_DESC, SORT_NUMERIC);

		return $timeZones;
	}
}

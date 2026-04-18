<?php
/**
 * P2FlagIcon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2FlagIcon
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use Yii;

final class P2FlagIcon extends P2Icon
{
	/**
	 * @var array
	 * protected array $options = [];
	 */

	/**
	 * If $enable is true, add the “fis” class; otherwise do nothing.
	 *
	 * @param bool $enable
	 * @return $this
	 */
	public function square(bool $enable = true): self
	{
		return $this->addCssClass('fis', $enable);
	}

	public function sq(bool $enable = true): self
	{
		return $this->square($enable);
	}
}

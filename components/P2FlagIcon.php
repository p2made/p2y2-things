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
 * @class \p2m\components\P2FlagIcon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2Icon;

class P2FlagIcon extends P2Icon
{
	const SQUARE_FLAG = 'fis'; // Flag Icon Square

	/**
	 * If $enable is true, add the “fis” class; otherwise do nothing.
	 *
	 * @param bool $enable
	 * @return $this
	 */
	public function square(bool $enable = true): self
	{
		return $this->addCssClass(self::SQUARE_FLAG, $enable);
	}
}

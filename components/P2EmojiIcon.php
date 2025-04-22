<?php
/**
 * P2EmojiIcon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\components\P2EmojiIcon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2Icon;

class P2EmojiIcon extends P2Icon
{
	/**
	 * overrides function in parent to nullify the action
	 *
	 * @return $this
	 */
	public function color(string $value): self
	{
		return $this;
	}

}

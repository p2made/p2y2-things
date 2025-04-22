<?php
/**
 * P2Icons.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\components\P2Icons
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2BootstrapIcon
use p2m\components\P2EmojiIcon
use p2m\components\P2Icon;

class P2Icons
{
	/**
	 * CSS class prefix
	 * @var string
	 */
	public static $cssPrefix = 'bi';

	/**
	 * CSS base prefix
	 * @var string
	 */
	public static $basePrefix = 'bi';

	/**
	 * CSS text prefix
	 * @var string
	 */
	public static $textPrefix = 'text';

	/**
	 * CSS size prefix
	 * @var string
	 */
	public static $sizePrefix = 'fs';

	/**
	 * Creates a `P2BootstrapIcon` component that can be used to render a Bootstrap Icons HTML icon.
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2BootstrapIcon
	 */
	public static function bootstrap($name, $options = [])
	{
		return new P2BootstrapIcon(static::$cssPrefix, $name, $options);
	}

	/**
	 * Shortcut for `bootstrap()` method
	 * @param string $name
	 * @param array $options
	 * @return P2BootstrapIcon
	 * @see bootstrap()
	 */
	public static function b($name, $options = [])
	{
		return static::bootstrap($name, $options);
	}

	/**
	 * Creates a `P2EmojiIcon` component that can be used to render a Emoji Icons HTML icon.
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2EmojiIcon
	 */
	public static function emoji($name, $options = [])
	{
		return new P2EmojiIcon(static::$cssPrefix, $name, $options);
	}

	/**
	 * Shortcut for `emoji()` method
	 * @param string $name
	 * @param array $options
	 * @return P2EmojiIcon
	 * @see emoji()
	 */
	public static function e($name, $options = [])
	{
		return static::emoji($name, $options);
	}

	/**
	 * Creates a `P2FlagIcon` component that can be used to render a Flag Icons HTML icon.
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2FlagIcon
	 */
	public static function flag($name, $options = [])
	{
		return new P2FlagIcon(static::$cssPrefix, $name, $options);
	}

	/**
	 * Shortcut for `flag()` method
	 * @param string $name
	 * @param array $options
	 * @return P2FlagIcon
	 * @see flag()
	 */
	public static function b($name, $options = [])
	{
		return static::flag($name, $options);
	}
}

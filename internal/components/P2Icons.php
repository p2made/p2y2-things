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
 * @class \p2m\internal\components\P2Icons
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\components;

use yii\base\InvalidConfigException;

class P2Icons
{
	const SIZE_PREFIX = 'fs';

	const IMG = 'img';
	const PRESENTATION = 'presentation';
	const NONE = 'none';
	const BUTTON = 'button';
	const LINK = 'link';
	const STATUS = 'status';
	const ALERT = 'alert';
	const NOTE = 'note';

	/**
	 * Subclasses must set this to 'bi', 'ec' or 'fi'
	 * @var string
	 */
	protected static string $cssPrefix;

	/**
	 * CSS text prefix
	 * @var string
	 */
	public static string $textPrefix = 'text';

	/**
	 * @param string $iconName  the icon identifier, e.g. 'list', 'smile', 'us'
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2BootstrapIcon|P2EmojiIcon|P2FlagIcon
	 */
	public static function icon(string $name, $options = [])
	{
		switch (static::$cssPrefix) {
			case 'bi':
				return new P2BootstrapIcon(static::$cssPrefix, $name, $options);
			case 'ec':
				return new P2EmojiIcon(static::$cssPrefix, $name, $options);
			case 'fi':
				return new P2FlagIcon(static::$cssPrefix, $name, $options);
			default:
				throw new InvalidArgumentException(
					"Unknown cssPrefix “" . static::$cssPrefix . "”, expected 'bi', 'ec' or 'fi'."
				);
		}
	}

	/**
	 * Shortcut for `icon()` method
	 * @param string $name
	 * @param array $options
	 * @return P2BootstrapIcon
	 * @see icon()
	 */
	public static function i($name, $options = [])
	{
		return static::icon($name, $options);
	}
}

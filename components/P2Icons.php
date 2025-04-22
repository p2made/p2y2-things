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

use p2m\components\P2BootstrapIcon;
use p2m\components\P2EmojiIcon;
use p2m\components\P2FlagIcon;

use yii\base\InvalidConfigException;

class P2Icons
{
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
	 * CSS size prefix
	 * @var string
	 */
	public static string $sizePrefix = 'fs';

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

	/**
	 * Colour values
	 * @see P2Icon::color
	 */
	const PRIMARY = 'primary';
	const PRIMARY_EMPHASIS = 'primary-emphasis';
	const SECONDARY = 'secondary';
	const SECONDARY_EMPHASIS = 'secondary-emphasis';
	const SUCCESS = 'success';
	const SUCCESS_EMPHASIS = 'success-emphasis';
	const DANGER = 'danger';
	const DANGER_EMPHASIS = 'danger-emphasis';
	const WARNING = 'warning';
	const WARNING_EMPHASIS = 'warning-emphasis';
	const INFO = 'info';
	const INFO_EMPHASIS = 'info-emphasis';
	const LIGHT = 'light';
	const LIGHT_EMPHASIS = 'light-emphasis';
	const DARK = 'dark';
	const DARK_EMPHASIS = 'dark-emphasis';
}

<?php
/**
 * P2IconFactory.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\internal\helpers\P2IconFactory
 * @package p2made/p2y2-things
 */

/**
 * @internal
 * Not part of the public API. Subject to change without notice.
 */

namespace p2m\internal\helpers;

use yii\base\InvalidConfigException;

abstract class P2IconFactory
{
	public const SIZE_PREFIX = 'fs';

	/*
	 * Role constants
	 */
	public const ROLE_IMG                   = 'img';
	public const ROLE_PRESENTATION          = 'presentation';
	public const ROLE_NONE                  = 'none';
	public const ROLE_BUTTON                = 'button';
	public const ROLE_LINK                  = 'link';
	public const ROLE_STATUS                = 'status';
	public const ROLE_ALERT                 = 'alert';
	public const ROLE_NOTE                  = 'note';

	/*
	 * Boostrap primary colour constants
	 */
	public const PRIMARY               = 'primary';
	public const PRIMARY_EMPHASIS      = 'primary-emphasis';
	public const SECONDARY             = 'secondary';
	public const SECONDARY_EMPHASIS    = 'secondary-emphasis';
	public const SUCCESS               = 'success';
	public const SUCCESS_EMPHASIS      = 'success-emphasis';
	public const DANGER                = 'danger';
	public const DANGER_EMPHASIS       = 'danger-emphasis';
	public const WARNING               = 'warning';
	public const WARNING_EMPHASIS      = 'warning-emphasis';
	public const INFO                  = 'info';
	public const INFO_EMPHASIS         = 'info-emphasis';
	public const LIGHT                 = 'light';
	public const LIGHT_EMPHASIS        = 'light-emphasis';
	public const DARK                  = 'dark';
	public const DARK_EMPHASIS         = 'dark-emphasis';
	public const BLACK                 = 'black';
	public const BLACK_50              = 'black-50';
	public const WHITE                 = 'white';
	public const WHITE_50              = 'white-50';

	/*
	 * Boostrap secondary colour constants
	 */
	public const BODY                  = 'body';
	public const BODY_EMPHASIS         = 'body-emphasis';
	public const BODY_SECONDARY        = 'body-secondary';
	public const BODY_TERTIARY         = 'body-tertiary';

	/*
	 * Named primary colour constants
	 */
	public const SILVER                = 'silver';
	public const GRAY                  = 'gray';
	public const MAROON                = 'maroon';
	public const RED                   = 'red';
	public const PURPLE                = 'purple';
	public const FUCHSIA               = 'fuchsia';
	public const GREEN                 = 'green';
	public const LIME                  = 'lime';
	public const OLIVE                 = 'olive';
	public const YELLOW                = 'yellow';
	public const NAVY                  = 'navy';
	public const BLUE                  = 'blue';
	public const TEAL                  = 'teal';
	public const AQUA                  = 'aqua';

	/*
	 * Named secondary colour constants
	 */
	public const ALICEBLUE             = 'aliceblue';
	public const ANTIQUEWHITE          = 'antiquewhite';
	public const AQUAMARINE            = 'aquamarine';
	public const AZURE                 = 'azure';
	public const BEIGE                 = 'beige';
	public const BISQUE                = 'bisque';
	public const BLANCHEDALMOND        = 'blanchedalmond';
	public const BLUEVIOLET            = 'blueviolet';
	public const BROWN                 = 'brown';
	public const BURLYWOOD             = 'burlywood';
	public const CADETBLUE             = 'cadetblue';
	public const CHARTREUSE            = 'chartreuse';
	public const CHOCOLATE             = 'chocolate';
	public const CORAL                 = 'coral';
	public const CORNFLOWERBLUE        = 'cornflowerblue';
	public const CORNSILK              = 'cornsilk';
	public const CRIMSON               = 'crimson';
	public const CYAN                  = 'cyan';
	public const DARKBLUE              = 'darkblue';
	public const DARKCYAN              = 'darkcyan';
	public const DARKGOLDENROD         = 'darkgoldenrod';
	public const DARKGRAY              = 'darkgray';
	public const DARKGREEN             = 'darkgreen';
	public const DARKGREY              = 'darkgrey';
	public const DARKKHAKI             = 'darkkhaki';
	public const DARKMAGENTA           = 'darkmagenta';
	public const DARKOLIVEGREEN        = 'darkolivegreen';
	public const DARKORANGE            = 'darkorange';
	public const DARKORCHID            = 'darkorchid';
	public const DARKRED               = 'darkred';
	public const DARKSALMON            = 'darksalmon';
	public const DARKSEAGREEN          = 'darkseagreen';
	public const DARKSLATEBLUE         = 'darkslateblue';
	public const DARKSLATEGRAY         = 'darkslategray';
	public const DARKSLATEGREY         = 'darkslategrey';
	public const DARKTURQUOISE         = 'darkturquoise';
	public const DARKVIOLET            = 'darkviolet';
	public const DEEPPINK              = 'deeppink';
	public const DEEPSKYBLUE           = 'deepskyblue';
	public const DIMGRAY               = 'dimgray';
	public const DIMGREY               = 'dimgrey';
	public const DODGERBLUE            = 'dodgerblue';
	public const FIREBRICK             = 'firebrick';
	public const FLORALWHITE           = 'floralwhite';
	public const FORESTGREEN           = 'forestgreen';
	public const GAINSBORO             = 'gainsboro';
	public const GHOSTWHITE            = 'ghostwhite';
	public const GOLD                  = 'gold';
	public const GOLDENROD             = 'goldenrod';
	public const GREENYELLOW           = 'greenyellow';
	public const GREY                  = 'grey';
	public const HONEYDEW              = 'honeydew';
	public const HOTPINK               = 'hotpink';
	public const INDIANRED             = 'indianred';
	public const INDIGO                = 'indigo';
	public const IVORY                 = 'ivory';
	public const KHAKI                 = 'khaki';
	public const LAVENDER              = 'lavender';
	public const LAVENDERBLUSH         = 'lavenderblush';
	public const LAWNGREEN             = 'lawngreen';
	public const LEMONCHIFFON          = 'lemonchiffon';
	public const LIGHTBLUE             = 'lightblue';
	public const LIGHTCORAL            = 'lightcoral';
	public const LIGHTCYAN             = 'lightcyan';
	public const LIGHTGOLDENRODYELLOW  = 'lightgoldenrodyellow';
	public const LIGHTGRAY             = 'lightgray';
	public const LIGHTGREEN            = 'lightgreen';
	public const LIGHTGREY             = 'lightgrey';
	public const LIGHTPINK             = 'lightpink';
	public const LIGHTSALMON           = 'lightsalmon';
	public const LIGHTSEAGREEN         = 'lightseagreen';
	public const LIGHTSKYBLUE          = 'lightskyblue';
	public const LIGHTSLATEGRAY        = 'lightslategray';
	public const LIGHTSLATEGREY        = 'lightslategrey';
	public const LIGHTSTEELBLUE        = 'lightsteelblue';
	public const LIGHTYELLOW           = 'lightyellow';
	public const LIMEGREEN             = 'limegreen';
	public const LINEN                 = 'linen';
	public const MAGENTA               = 'magenta';
	public const MEDIUMAQUAMARINE      = 'mediumaquamarine';
	public const MEDIUMBLUE            = 'mediumblue';
	public const MEDIUMORCHID          = 'mediumorchid';
	public const MEDIUMPURPLE          = 'mediumpurple';
	public const MEDIUMSEAGREEN        = 'mediumseagreen';
	public const MEDIUMSLATEBLUE       = 'mediumslateblue';
	public const MEDIUMSPRINGGREEN     = 'mediumspringgreen';
	public const MEDIUMTURQUOISE       = 'mediumturquoise';
	public const MEDIUMVIOLETRED       = 'mediumvioletred';
	public const MIDNIGHTBLUE          = 'midnightblue';
	public const MINTCREAM             = 'mintcream';
	public const MISTYROSE             = 'mistyrose';
	public const MOCCASIN              = 'moccasin';
	public const NAVAJOWHITE           = 'navajowhite';
	public const OLDLACE               = 'oldlace';
	public const OLIVEDRAB             = 'olivedrab';
	public const ORANGE                = 'orange';
	public const ORANGERED             = 'orangered';
	public const ORCHID                = 'orchid';
	public const PALEGOLDENROD         = 'palegoldenrod';
	public const PALEGREEN             = 'palegreen';
	public const PALETURQUOISE         = 'paleturquoise';
	public const PALEVIOLETRED         = 'palevioletred';
	public const PAPAYAWHIP            = 'papayawhip';
	public const PEACHPUFF             = 'peachpuff';
	public const PERU                  = 'peru';
	public const PINK                  = 'pink';
	public const PLUM                  = 'plum';
	public const POWDERBLUE            = 'powderblue';
	public const REBECCAPURPLE         = 'rebeccapurple';
	public const ROSYBROWN             = 'rosybrown';
	public const ROYALBLUE             = 'royalblue';
	public const SADDLEBROWN           = 'saddlebrown';
	public const SALMON                = 'salmon';
	public const SANDYBROWN            = 'sandybrown';
	public const SEAGREEN              = 'seagreen';
	public const SEASHELL              = 'seashell';
	public const SIENNA                = 'sienna';
	public const SKYBLUE               = 'skyblue';
	public const SLATEBLUE             = 'slateblue';
	public const SLATEGRAY             = 'slategray';
	public const SLATEGREY             = 'slategrey';
	public const SNOW                  = 'snow';
	public const SPRINGGREEN           = 'springgreen';
	public const STEELBLUE             = 'steelblue';
	public const TAN                   = 'tan';
	public const THISTLE               = 'thistle';
	public const TOMATO                = 'tomato';
	public const TRANSPARENT           = 'transparent';
	public const TURQUOISE             = 'turquoise';
	public const VIOLET                = 'violet';
	public const WHEAT                 = 'wheat';
	public const WHITESMOKE            = 'whitesmoke';
	public const YELLOWGREEN           = 'yellowgreen';

	/**
	 * Subclasses must set this to 'bi', 'ec' or 'fi'
	 * @var string
	 */
	protected static string $cssPrefix;

	/**
	 * Creates a new P2Icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return P2BootstrapIcon|P2EmojiIcon|P2FlagIcon
	 */
	public static function icon(string $name, $options = []): P2Icon
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
					"Unknown cssPrefix Ò" . static::$cssPrefix . "Ó, expected 'bi', 'ec' or 'fi'."
				);
		}
	}

	/**
	 * Shortcut for `icon()` function
	 * @see icon()
	 */
	public static function i(string $name, $options = []): P2Icon
	{
		return static::icon($name, $options);
	}

	/**
	 * Creates a new P2IconBlock as a circle containing a P2Icon
	 *
	 * @param P2Icon $icon
	 * @param array $options = []
	 * @return P2BootstrapIcon|P2EmojiIcon|P2FlagIcon
	 */
	public static function circle(P2Icon $icon, array $options = []): P2IconBlock
	{
		return new P2IconBlock(true, $icon, $options);
	}

	/**
	 * Shortcut for `circle()` function
	 * @see circle()
	 */
	public static function c(P2Icon $icon, array $options = []): P2IconBlock
	{
		return static::circle($icon, $options);
	}

	/**
	 * Creates a new P2IconBlock as a square containing a P2Icon
	 *
	 * @param P2Icon $icon
	 * @param array $options = []
	 * @return P2IconBlock
	 */
	public static function square(P2Icon $icon, array $options = []): P2IconBlock
	{
		return new P2IconBlock(false, $icon, $options);
	}

	/**
	 * Shortcut for `square()` function
	 * @see square()
	 */
	public static function s(P2Icon $icon, array $options = []): P2IconBlock
	{
		return static::square($icon, $options);
	}
}

<?php
/**
 * FlagIconCss.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers\base;

use p2made\components\Flag;

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                           ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                           ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Class FlagIconCss
 * @package p2made\yii2-p2y2-things
 */
class FlagIconCss extends P2HelperBase
{

	/** @var string CSS Class prefix */
	public static $cssPrefix = 'flag';

	/**
	 * Creates a Flag component as an i tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function i($name, $options = [])
	{
		return static::flag($name, 'i', $options = []);
	}

	/**
	 * Creates a Flag component as a span tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function span($name, $options = [])
	{
		return static::flag($name, 'span', $options = []);
	}

	/**
	 * Creates a Flag component as a div tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function div($name, $options = [])
	{
		return static::flag($name, 'div', $options = []);
	}

	/**
	 * Creates a _square_ Flag component as an i tag
	 * Shortcut for i()->square()
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function square($name, $options = [])
	{
		return static::flag($name, 'i', $options = [])->square();
	}

	/**
	 * Shortcut for i()->title() with no value passed
	 * sets title attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function iTitle($name, $options = [])
	{
		return static::i($name, $options = [])->title();
	}

	/**
	 * Shortcut for span()->title() with no value passed
	 * sets title attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function spanTitle($name, $options = [])
	{
		return static::span($name, $options = [])->title();
	}

	/**
	 * Shortcut for div()->title() with no value passed
	 * sets title attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function divTitle($name, $options = [])
	{
		return static::div($name, $options = [])->title();
	}

	/**
	 * Shortcut for i()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function iId($name, $options = [])
	{
		return static::i($name, $options = [])->id();
	}

	/**
	 * Shortcut for span()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function spanId($name, $options = [])
	{
		return static::span($name, $options = [])->id();
	}

	/**
	 * Shortcut for div()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function divId($name, $options = [])
	{
		return static::div($name, $options = [])->id();
	}

	/**
	 * Shortcut for i()->title()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function iTitleId($name, $options = [])
	{
		return static::i($name, $options = [])->title()->id();
	}

	/**
	 * Shortcut for span()->title()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function spanTitleId($name, $options = [])
	{
		return static::span($name, $options = [])->title()->id();
	}

	/**
	 * Shortcut for div()->title()->id() with no value passed
	 * sets id attibute to flag id
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function divTitleId($name, $options = [])
	{
		return static::div($name, $options = [])->title()->id();
	}


	/**
	 * Creates a Flag component
	 * All the others go through this
	 *
	 * @param string $name
	 * @param string $tag
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	private static function flag($name, $tag = 'div', $options = [])
	{
		return new Flag($name, $tag, $options);
	}

}

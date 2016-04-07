<?php
/**
 * Glyphicons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers\base;

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
 * Class Glyphicons
 * @package p2made\yii2-p2y2-things
 */
class Glyphicons extends P2HelperBase
{

	/** @var string CSS Class prefix */
	public static $cssPrefix = 'glyphicon';

	/**
	 * Creates a Glyphicon component as an i tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function i($name, $options = [])
	{
		return static::glyphicon($name, $options = []);
	}

	/**
	 * Creates a Glyphicon component as a span tag
	 * Shortcut for glyphicon()->tag('span')
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function span($name, $options = [])
	{
		return static::glyphicon($name, $options = [])->tag('span');
	}

	/**
	 * Creates a Glyphicon component as an i tag with fixed width
	 * Shortcut for i()->fixedWidth()
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function fw($name, $options = [])
	{
		return static::i($name, $options = [])->fixedWidth();
	}

	/**
	 * Creates a Glyphicon component as a span tag with fixed width
	 * Shortcut for span()->fixedWidth()
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\Flag
	 */
	public static function sfw($name, $options = [])
	{
		return static::span($name, $options = [])->fixedWidth();
	}


	/**
	 * Creates a Glyphicon component
	 * All the others go through this
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	private static function glyphicon($name, $options = [])
	{
		return new \p2made\components\Glyphicon($name, $options);
	}

}

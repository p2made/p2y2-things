<?php
/**
 * Glyphicons.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\base\Glyphicons
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2m\helpers\base;

/**
 * Class Glyphicons
 * @package p2m\yii2-p2y2-things
 */
class Glyphicons extends \p2m\base\helpers\P2HelperBase
{

	/** @var string CSS Class prefix */
	public static $cssPrefix = 'glyphicon';

	/**
	 * Creates a Glyphicon component as an i tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\Flag
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
	 * @return p2m\components\Flag
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
	 * @return p2m\components\Flag
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
	 * @return p2m\components\Flag
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
	 * @return p2m\components\SocialButton
	 */
	private static function glyphicon($name, $options = [])
	{
		return new \p2m\components\Glyphicon($name, $options);
	}

}

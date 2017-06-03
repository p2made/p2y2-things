<?php
/**
 * BootstrapSocial.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\base\BootstrapSocial
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

use p2m\components\SocialButton;

/**
 * Class BootstrapSocial
 * @package p2m\yii2-p2y2-things
 */
class BootstrapSocial extends \p2m\base\helpers\P2HelperBase
{

	/** @var string CSS Class prefix */
	public static $cssPrefix = 'btn';

	/**
	 * Creates a SocialButton component as an anchor tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function a($name, $options = [])
	{
		$options = array_merge($options, ['role' => 'button']);
		return static::socialButton($name, $options);
	}

	/**
	 * Creates a SocialButton component as an anchor tag icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function i($name, $options = [])
	{
		return static::a($name, $options)->icon();
	}

	/**
	 * Creates a SocialButton component as an anchor tag without 'btn-block'
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function nb($name, $options = [])
	{
		return static::a($name, $options)->noBlock();
	}

	/**
	 * Creates a SocialButton component as a button tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function b($name, $options = [])
	{
		$options = array_merge($options, ['type' => 'submit']);
		return static::socialButton($name, $options)->tag('button');
	}

	/**
	 * Creates a SocialButton component as a button tag icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function bi($name, $options = [])
	{
		return static::b($name, $options)->icon();
	}

	/**
	 * Creates a SocialButton component as a button tag without 'btn-block'
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	public static function bnb($name, $options = [])
	{
		return static::b($name, $options)->noBlock();
	}

	/**
	 * Creates a SocialButton component
	 * All the others go through this
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2m\components\SocialButton
	 */
	private static function socialButton($name, $options = [])
	{
		return new SocialButton($name, $options);
	}

}

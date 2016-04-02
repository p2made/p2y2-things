<?php
/**
 * BootstrapSocialBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers\base;

use p2made\components\SocialButton;

/**
 * Class BootstrapSocialBase
 * @package p2made\yii2-p2y2-things
 */
class BootstrapSocialBase
{

	/**
	 * Creates a SocialButton component as an anchor tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
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
	 * @return p2made\components\SocialButton
	 */
	public static function aIcon($name, $options = [])
	{
		return static::a($name, $options)->icon();
	}

	/**
	 * Creates a SocialButton component as a button tag
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	public static function button($name, $options = [])
	{
		$options = array_merge($options, ['type' => 'submit']);
		return static::socialButton($name, $options)->tag('button');
	}

	/**
	 * Creates a SocialButton component as a button tag icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	public static function buttonIcon($name, $options = [])
	{
		return static::button($name, $options)->icon();
	}

	/**
	 * Creates a SocialButton component
	 * All the others go through this
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	private static function socialButton($name, $options = [])
	{
		return new SocialButton($name, $options);
	}

}

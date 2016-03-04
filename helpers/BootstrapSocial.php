<?php
/**
 * BootstrapSocial.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\helpers;

use yii\helpers\Html;
use p2made\components;
use rmrevin\yii\fontawesome\FA;

/**
 * Class BootstrapSocial
 * @package p2made\yii2-p2y2-things
 */
class BootstrapSocial
{

	/** @var string CSS Class prefix */
	public static $cssPrefix = 'btn';

	/**
	 * Creates a `SocialButton` component
	 *
	 * @param string $name
	 * @param array $options
	 * @return components\SocialButton
	 */
	public static function a($name, $options = [])
	{
		return new components\SocialButton('a', $name, $options);
	}

	/**
	 * Creates a `SocialButton` component
	 *
	 * @param string $name
	 * @param array $options
	 * @return components\SocialButton
	 */
	public static function button($name, $options = [])
	{
		return new components\SocialButton('button', $name, $options);
	}

	/**
	 * Shortcut for `button()` method
	 * @see button()
	 *
	 * @param string $name
	 * @param array $options
	 * @return components\SocialButton
	 */
	public static function b($name, $options = [])
	{
		return static::button($name, $options);
	}

	/**
	 * Size values
	 * @see p2made\components\SocialButton::size
	 */
	const SIZE_LARGE = 'lg';
	const SIZE_2X = '2x';
	const SIZE_3X = '3x';
	const SIZE_4X = '4x';
	const SIZE_5X = '5x';




}





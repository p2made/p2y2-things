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
	 * Creates a SocialButton component
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	public static function a($name, $options = [])
	{
		return new SocialButton($name, $options);
	}

	/**
	 * Creates a SocialButton component
	 *
	 * @param string $name
	 * @param array $options
	 * @return p2made\components\SocialButton
	 */
	public static function aIcon($name, $options = [])
	{
		return new SocialButton($name, $options);
	}

}

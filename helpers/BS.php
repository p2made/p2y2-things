<?php
/**
 * BS.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\helpers;

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

/**
 * Class BS
 * @package p2made\yii2-p2y2-things
 */
class BS extends BootstrapSocial
{

	/**
	 * Get all icon constants for dropdown list in example
	 * @param bool $html whether to render icon as array value prefix
	 * @return array
	 */
	public static function getConstants($html = false)
	{
		$result = [];
		foreach ((new \ReflectionClass(get_class()))->getConstants() as $constant) {
			$key = static::$cssPrefix . ' ' . static::$cssPrefix . '-' . $constant;

			$result[$key] = ($html)
				? static::icon($constant) . '&nbsp;&nbsp;' . $constant
				: $constant;
		}

		return $result;
	}

	const _ADN = 'adn';
	const _BITBUCKET = 'bitbucket';
	const _DROPBOX = 'dropbox';
	const _FACEBOOK = 'facebook';
	const _FLICKR = 'flickr';
	const _FOURSQUARE = 'foursquare';
	const _GITHUB = 'github';
	const _GOOGLE = 'google';
	const _INSTAGRAM = 'instagram';
	const _LINKEDIN = 'linkedin';
	const _MICROSOFT = 'microsoft';
	const _ODNOKLASSNIKI = 'odnoklassniki';
	const _OPENID = 'openid';
	const _PINTEREST = 'pinterest';
	const _REDDIT = 'reddit';
	const _SOUNDCLOUD = 'soundcloud';
	const _TUMBLR = 'tumblr';
	const _TWITTER = 'twitter';
	const _VIMEO = 'vimeo';
	const _VK = 'vk';
	const _WINDOWS = 'windows';
	const _WORDPRESS = 'wordpress';
	const _YAHOO = 'yahoo';
}

<?php
/**
 * BSocial.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\BSocial
 */

namespace p2m\helpers;

/**
 * Use this helper with...
 *
 * use p2m\helpers\BSocial;
 * ...
 * echo BSocial::method([$params]);
 *
 * or
 *
 * echo \p2m\helpers\BSocial::method([$params]);
 */
class BSocial extends \p2m\helpers\base\BootstrapSocial
{

	/**
	 * Size values
	 * @see p2m\components\SocialButton
	 */
	const ADN = 'adn';
	const BITBUCKET = 'bitbucket';
	const DROPBOX = 'dropbox';
	const FACEBOOK = 'facebook';
	const FLICKR = 'flickr';
	const FOURSQUARE = 'foursquare';
	const GITHUB = 'github';
	const GOOGLE = 'google';
	const INSTAGRAM = 'instagram';
	const LINKEDIN = 'linkedin';
	const MICROSOFT = 'microsoft';
	const ODNOKLASSNIKI = 'odnoklassniki';
	const OPENID = 'openid';
	const PINTEREST = 'pinterest';
	const REDDIT = 'reddit';
	const SOUNDCLOUD = 'soundcloud';
	const TUMBLR = 'tumblr';
	const TWITTER = 'twitter';
	const VIMEO = 'vimeo';
	const VK = 'vk';
	const WINDOWS = 'microsoft';
	const YAHOO = 'yahoo';

	/**
	 * Size values
	 * @see p2m\components\SocialButton::size
	 */
	const SIZE_LARGE = 'lg';
	const SIZE_SMALL = 'sm';
	const SIZE_XSMALL = 'xs';
}

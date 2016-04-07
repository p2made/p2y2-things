<?php
/**
 * BSocial.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\helpers;

/**
 * Use this helper with...
 *
 * use p2made\helpers\BSocial;
 * ...
 * echo BSocial::method([$params]);
 *
 * or
 *
 * echo \p2made\helpers\BSocial::method([$params]);
 */

/**
 * Class BSocial
 * @package p2made\yii2-p2y2-things
 */
class BSocial extends \p2made\helpers\base\BootstrapSocial
{

	/**
	 * Size values
	 * @see p2made\components\SocialButton
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
	 * @see p2made\components\SocialButton::size
	 */
	const SIZE_LARGE = 'lg';
	const SIZE_SMALL = 'sm';
	const SIZE_XSMALL = 'xs';
}

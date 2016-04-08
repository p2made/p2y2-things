<?php
/**
 * SocialButton.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\components;

use p2made\helpers\BSocial;
use p2made\helpers\FA;
use yii\bootstrap\Html;

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
 * Use this helper with...
 *
 * use p2made\components\SocialButton;
 * ...
 * echo SocialButton::method([$params]);
 *
 * or
 *
 * echo \p2made\components\SocialButton::method([$params]);
 */

/**
 * Class SocialButton
 * @package p2made\yii2-p2y2-things
 */
class SocialButton extends \p2made\components\base\P2ComponentBase
{

	/** @var string */
	public static $defaultTag = 'a';

	/** @var string */
	private $defaultCaption = ' Sign in with ';

	/** @var string */
	private $caption;

	/** @var array */
	private $services = array(
		'adn' =>           ['name' => 'App.net', 'icon' => 'adn', 'hex' => '#D87A68'],
		'bitbucket' =>     ['name' => 'Bitbucket', 'icon' => 'bitbucket', 'hex' => '#205081'],
		'dropbox' =>       ['name' => 'Dropbox', 'icon' => 'dropbox', 'hex' => '#1087DD'],
		'facebook' =>      ['name' => 'Facebook', 'icon' => 'facebook', 'hex' => '#3B5998'],
		'flickr' =>        ['name' => 'Flickr', 'icon' => 'flickr', 'hex' => '#2BA9E1'],
		'foursquare' =>    ['name' => 'Foursquare', 'icon' => 'foursquare', 'hex' => '#f94877'],
		'github' =>        ['name' => 'GitHub', 'icon' => 'github', 'hex' => '#444444'],
		'google' =>        ['name' => 'Google', 'icon' => 'google', 'hex' => '#DD4B39'],
		'instagram' =>     ['name' => 'Instagram', 'icon' => 'instagram', 'hex' => '#3F729B'],
		'linkedin' =>      ['name' => 'LinkedIn', 'icon' => 'linkedin', 'hex' => '#007BB6'],
		'microsoft' =>     ['name' => 'Microsoft', 'icon' => 'windows', 'hex' => '#2672EC'],
		'odnoklassniki' => ['name' => 'Odnoklassniki', 'icon' => 'odnoklassniki', 'hex' => '#F4731C'],
		'openid' =>        ['name' => 'OpenID', 'icon' => 'openid', 'hex' => '#F7931E'],
		'pinterest' =>     ['name' => 'Pinterest', 'icon' => 'pinterest', 'hex' => '#CB2027'],
		'reddit' =>        ['name' => 'Reddit', 'icon' => 'reddit', 'hex' => '#EFF7FF'],
		'soundcloud' =>    ['name' => 'SoundCloud', 'icon' => 'soundcloud', 'hex' => '#FF5500'],
		'tumblr' =>        ['name' => 'Tumblr', 'icon' => 'tumblr', 'hex' => '#CB2027'],
		'twitter' =>       ['name' => 'Twitter', 'icon' => 'twitter', 'hex' => '#55ACEE'],
		'vimeo' =>         ['name' => 'Vimeo', 'icon' => 'vimeo-square', 'hex' => '#1AB7EA'],
		'vk' =>            ['name' => 'VK', 'icon' => 'vk', 'hex' => '#587EA3'],
		'yahoo' =>         ['name' => 'Yahoo!', 'icon' => 'yahoo', 'hex' => '#720E9E'],
	);

	/** @var array */
	private $service = null;

	/** @var string */
	private $serviceIcon = null;

	const BTN = 'btn';
	const BTN_BLOCK = 'btn-block';
	const BTN_SOCIAL = 'btn-social';
	const BTN_SOCIAL_ICON = 'btn-social-icon';

	/**
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($name, $options = [])
	{
		$this->service = $this->services[$name];
		$this->serviceIcon = FA::icon($this->service['icon']);
		$this->caption = $this->serviceIcon
			. $this->defaultCaption . $this->service['name'];

		Html::addCssClass($options, self::BTN);
		Html::addCssClass($options, self::BTN_BLOCK);
		Html::addCssClass($options, self::BTN_SOCIAL);
		Html::addCssClass($options, self::BTN . '-' . $name);

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$tag = empty($this->tag) ? static::$defaultTag : $this->tag;

		return Html::tag($tag, $this->caption, $this->options);
	}

	/**
	 * @return self
	 */
	public function icon()
	{
		Html::removeCssClass($this->options, self::BTN_BLOCK);
		Html::removeCssClass($this->options, self::BTN_SOCIAL);

		Html::addCssClass($this->options, self::BTN_SOCIAL_ICON);

		$this->caption = $this->serviceIcon;

		return $this;
		}

	/**
	 * @return self
	 */
	public function noBlock()
	{
		Html::removeCssClass($this->options, self::BTN_BLOCK);

		return $this;
	}

	/**
	 * @param string $value
	 * placeholder '@@@' is replaced with service name from internal data
	 * @return self
	 */
	public function caption($value)
	{
		if($value == '') {
			return $this->icon(); // $value == '' is same as icon()
		}

		$this->caption = str_replace('  ', ' ',
			$this->serviceIcon
			. ' '
			. str_replace('@@@', $this->service['name'], $value)
		);

		return $this;
	}

	/**
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size($value)
	{
		return $this->addCssClass(
			self::BTN . '-' . $value,
			in_array((string)$value, [
				BSocial::SIZE_LARGE,
				BSocial::SIZE_SMALL,
				BSocial::SIZE_XSMALL
			], true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'FA::size()',
				'BSocial::SIZE_LARGE, BSocial::SIZE_SMALL, BSocial::SIZE_XSMALL'
			)
		);
	}

	/**
	 * Change html tag.
	 * @param string $tag
	 * @return self
	 */
	// public function tag($tag)

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \rmrevin\yii\fontawesome\component\Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	// public function addCssClass($class, $condition = true, $throw = false)

	/**
	 * @param string|null $tag
	 * @param string|null $content
	 * @param array $options
	 * @return string
	 */
	// public function render($tag = null, $content = null, $options = [])

}

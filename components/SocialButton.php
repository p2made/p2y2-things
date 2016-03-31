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

use p2made\helpers\BA;
use yii\helpers\Html;

/**
 * Class SocialButton
 * @package p2made\yii2-p2y2-things
 */
class SocialButton
{

	/** @var string */
	public static $defaultTag = 'a';

	/** @var string */
	private $tag;

	/** @var array */
	private $options = [];

	/**
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($name, $options = [])
	{
		Html::addCssClass($options, BA::$cssPrefix . ' ' . BA::$cssPrefix . '-' . $name);

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->render();
	}

	/**
	 * @return self
	 */
	public function icon()
	{
		return self;
	}

	/**
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size($value)
	{
		return $this->addCssClass(
			BA::$cssPrefix . '-' . $value,
			in_array((string)$value, [BA::SIZE_LARGE, BA::SIZE_2X, BA::SIZE_3X, BA::SIZE_4X, BA::SIZE_5X], true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'BA::size()',
				'BA::SIZE_LARGE, BA::SIZE_2X, BA::SIZE_3X, BA::SIZE_4X, BA::SIZE_5X'
			)
		);
	}

	/**
	 * Change html tag.
	 * @param string $tag
	 * @return static
	 * @throws \yii\base\InvalidParamException
	 */
	public function tag($tag)
	{
		$this->tag = $tag;

		return $this;
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \rmrevin\yii\fontawesome\component\Icon
	 * @throws \yii\base\InvalidConfigException
	 * @codeCoverageIgnore
	 */
	public function addCssClass($class, $condition = true, $throw = false)
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

				throw new \yii\base\InvalidConfigException($message);
			}
		} else {
			Html::addCssClass($this->options, $class);
		}

		return $this;
	}

	/**
	 * @param string|null $tag
	 * @param string|null $content
	 * @param array $options
	 * @return string
	 */
	public function render($tag = null, $content = null, $options = [])
	{
		$tag = empty($tag)
			? (empty($this->tag) ? static::$defaultTag : $this->tag)
			: $tag;

		$options = array_merge($this->options, $options);

		return Html::tag($tag, $content, $options);
	}
}


	private $_services = [
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
	];

?>
<?php
namespace p2made\helpers;

/**
 *
 *
 */

class BootstrapSocial
{

protected $_service = null;
protected $_serviceIcon = null;


//	public function a($text, $url = null, $options = [])
	public static function a($service, $content = null, $url = null, $options = [])
	{
		$text = ($content == null ? 'Sign in with' : $content) . ' ' . this::service($service);
		//
		//
		//

		return parent::a($text, $url, $options);
	}

//	public function a($text, $url = null, $options = [])
	public static function aIcon($service, $url = null, $options = [])
	{
		$text = FA::icon(this::serviceIcon($service))->fixedWidth();
		$this->addCssClass('btn btn-block');
		$this->addCssClass('btn-social-icon');
		$this->addCssClass('btn-' . $service);
		//
		//
		//

		return parent::a($text, $url, $options);
	}

//	public function button($content = 'Button', $options = [])
	public static function button($service, $content = null, $options = [])
	{
		//

		return parent::button($content, $options);
	}

//	public static function input($type, $name = null, $value = null, $options = [])
	public static function input($service, $name = null, $value = null, $options = [])
	{
		//

		return parent::input('button', $name = null, $value = null, $options = []);
	}

	protected static function service($serviceCode)
	{
		if ($_service != null) {
			return $_service;
		}

		$_service = $_services[$serviceCode];
		return $_service;
	}

	protected static function serviceIcon($serviceCode)
	{
		if ($_serviceIcon != null) {
			return $_serviceIcon;
		}

		$_serviceIcon = $_services[$serviceCode][$icon];
		return $_serviceIcon;
	}


/*
	<a class="btn btn-block btn-social btn-github"><span class="fa fa-github fa-fw"></span> Sign in with GitHub</a>

	<div class="text-center"><a class="btn btn-social-icon btn-github"><span class="fa fa-github fa-fw"></span></a></div>

<h3 class="text-center">Different Sizes</h3>
	<a class="btn btn-block btn-social btn-lg btn-github"><span class="fa fa-github fa-fw"></span> Sign in with github</a>
	<a class="btn btn-block btn-social btn-github"><span class="fa fa-github fa-fw"></span> Sign in with github</a>
	<a class="btn btn-block btn-social btn-sm btn-github"><span class="fa fa-github fa-fw"></span> Sign in with github</a>
	<a class="btn btn-block btn-social btn-xs btn-github"><span class="fa fa-github fa-fw"></span> Sign in with github</a>

	<a class="btn btn-social-icon btn-lg btn-github"><span class="fa fa-github fa-fw"></span></a>
	<a class="btn btn-social-icon btn-github"><span class="fa fa-github fa-fw"></span></a>
	<a class="btn btn-social-icon btn-sm btn-github"><span class="fa fa-github fa-fw"></span></a>
	<a class="btn btn-social-icon btn-xs btn-github"><span class="fa fa-github fa-fw"></span></a>
*/
}

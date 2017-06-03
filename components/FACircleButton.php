<?php
/**
 * FACircleButton.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\components\FACircleButton
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

namespace p2m\components;

use yii\bootstrap\Html;
use p2m\helpers\CB;

/**
 * Use this helper with...
 *
 * use p2m\components\base\FACircleButton;
 * ...
 * echo P2ComponentBase::method([$params]);
 *
 * or
 *
 * echo \p2m\components\base\FACircleButton::method([$params]);
 */
class FACircleButton extends \p2m\components\base\CircleButtonBase
{

	/** @var string */
	public static $defaultTag = 'button';

	/** @var string */
	protected $tag;

	/** @var string */
	private $caption;

	/** @var mixed */
	protected $content = null;

	/** @var array */
	protected $options = [];

	/**
	 * @param array $options
	 */
	public function __construct($options = [])
	{
		// Html::addCssClass($options, 'classes');

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
	 * Change html tag.
	 * @param string $tag
	 * @return self
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
?>


<?php
namespace p2m\components;

use p2m\helpers\BSocial;
use p2m\helpers\FA;
use yii\bootstrap\Html;

class SocialButton extends \p2m\components\base\P2ComponentBase
{

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

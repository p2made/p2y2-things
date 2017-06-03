<?php
/**
 * CircleButtonBase.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\components\base\CircleButtonBase
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

namespace p2m\components\base;

use yii\bootstrap\Html;
use p2m\helpers\CB;

/**
 * Use this helper with...
 *
 * use p2m\components\base\CircleButtonBase;
 * ...
 * echo P2ComponentBase::method([$params]);
 *
 * or
 *
 * echo \p2m\components\base\CircleButtonBase::method([$params]);
 */
class CircleButtonBase extends \p2m\base\components\P2ComponentBase
{

	/** @var string */
	public static $defaultTag = 'button';

	/** @var string */
	protected $tag;

	/** @var string */
	private $icon = null;

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

	/**
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function type($value)
	{
		return $this->addCssClass(
			self::BTN . '-' . $value,
			in_array((string)$value, [
				CB::TYPE_LINK
			], true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'FA::size()',
				'CB::TYPE_LINK'
			)
		);
	}

	/**
	 * @param string $value
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size($value)
	{
		if((string)$value === '') {
			return $this;
		}

		return $this->addCssClass(
			self::BTN . '-' . $value,
			in_array((string)$value, [
				CB::SIZE_SMALL,
				CB::SIZE_XSMALL
			], true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'FA::size()',
				'CB::SIZE_SMALL, CB::SIZE_XSMALL'
			)
		);
	}

}
?>


	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle'], 'encodeLabel' => false]); ?>
					<br><br>
					<h4>Large Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle btn-lg'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle btn-lg'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle btn-lg'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle btn-lg'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle btn-lg'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle btn-lg'], 'encodeLabel' => false]); ?>
					<br><br>
					<h4>Extra Large Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle btn-xl'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle btn-xl'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle btn-xl'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle btn-xl'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle btn-xl'], 'encodeLabel' => false]); ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle btn-xl'], 'encodeLabel' => false]); ?>


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
	private $icon = null;

	const BTN = 'btn';

	/**
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($name, $options = [])
	{
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$tag = empty($this->tag) ? static::$defaultTag : $this->tag;

		return Html::tag($tag, $this->caption, $this->options);
	}
}

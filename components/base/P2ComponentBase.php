<?php
/**
 * P2ComponentBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\components\base;

use yii\bootstrap\Html;

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS, OR SUB-CLASSES, DIRECTLY!     ##### ^ #####
 * ##### ^ #####                                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Use this helper with...
 *
 * use p2made\components\base\P2ComponentBase;
 * ...
 * echo P2ComponentBase::method([$params]);
 *
 * or
 *
 * echo \p2made\components\base\P2ComponentBase::method([$params]);
 */

/**
 * Class P2ComponentBase
 * @package p2made\yii2-p2y2-things
 */
class P2ComponentBase
{

	/** @var string */
	public static $defaultTag;

	/** @var string */
	protected $tag;

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

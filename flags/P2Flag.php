<?php
/**
 * P2Flag.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\flags\P2Flag
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\flags;

use p2m\flags\P2FlagIcons;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Flag
{
	/**
	 * @var array
	 */
	private $options = [];

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($cssPrefix, $name, $options = [])
	{
		Html::addCssClass($options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($options, P2FlagIcons::$basePrefix . '-' . $name);
		}

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$options = $this->options;

		$tag = ArrayHelper::remove($options, 'tag', 'i');

		return Html::tag($tag, null, $options);
	}

	/**
	 * @param string $value
	 * @return \p2m\flags\P2Flag
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color($value)
	{
		$values = [
			P2FlagIcons::PRIMARY,
			P2FlagIcons::PRIMARY_EMPHASIS,
			P2FlagIcons::SECONDARY,
			P2FlagIcons::SECONDARY_EMPHASIS,
			P2FlagIcons::SUCCESS,
			P2FlagIcons::SUCCESS_EMPHASIS,
			P2FlagIcons::DANGER,
			P2FlagIcons::DANGER_EMPHASIS,
			P2FlagIcons::WARNING,
			P2FlagIcons::WARNING_EMPHASIS,
			P2FlagIcons::INFO,
			P2FlagIcons::INFO_EMPHASIS,
			P2FlagIcons::LIGHT,
			P2FlagIcons::LIGHT_EMPHASIS,
			P2FlagIcons::DARK,
			P2FlagIcons::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			P2FlagIcons::$textPrefix . '-' . $value,
			in_array((string)$value, $values, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2FlagIcons::size()',
				implode(', ', $values)
			)
		);
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \p2m\flags\P2Flag
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

				throw new InvalidConfigException($message);
			}
		} else {
			Html::addCssClass($this->options, $class);
		}

		return $this;
	}
}

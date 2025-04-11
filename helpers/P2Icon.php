<?php
/**
 * P2Icon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\helpers\P2Icon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\helpers;

use p2m\helpers\P2BootstrapIcons;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Icon
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
			Html::addCssClass($options, P2BootstrapIcons::$basePrefix . '-' . $name);
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
	 * @return \p2m\icons\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color($value)
	{
		$values = [
			P2BootstrapIcons::PRIMARY,
			P2BootstrapIcons::PRIMARY_EMPHASIS,
			P2BootstrapIcons::SECONDARY,
			P2BootstrapIcons::SECONDARY_EMPHASIS,
			P2BootstrapIcons::SUCCESS,
			P2BootstrapIcons::SUCCESS_EMPHASIS,
			P2BootstrapIcons::DANGER,
			P2BootstrapIcons::DANGER_EMPHASIS,
			P2BootstrapIcons::WARNING,
			P2BootstrapIcons::WARNING_EMPHASIS,
			P2BootstrapIcons::INFO,
			P2BootstrapIcons::INFO_EMPHASIS,
			P2BootstrapIcons::LIGHT,
			P2BootstrapIcons::LIGHT_EMPHASIS,
			P2BootstrapIcons::DARK,
			P2BootstrapIcons::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			P2BootstrapIcons::$textPrefix . '-' . $value,
			in_array((string)$value, $values, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2BootstrapIcons::size()',
				implode(', ', $values)
			)
		);
	}

	/**
	 * @param string $class
	 * @param bool $condition
	 * @param string|bool $throw
	 * @return \p2m\icons\P2Icon
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

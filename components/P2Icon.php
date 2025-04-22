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
 * @class \p2m\components\P2Icon
 * @package p2made/yii2-p2y2-things
 */

namespace p2m\components;

use p2m\components\P2Icons;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class P2Icon
{
	/**
	 * @var array
	 */
	private $options = [];

	const TEXT_PREFIX = 'text';
	const SIZE_PREFIX = 'fs';

	/**
	 * @param string $cssPrefix
	 * @param string $name
	 * @param array $options
	 */
	public function __construct($cssPrefix, $name, $options = [])
	{
		Html::addCssClass($options, $cssPrefix);

		if (!empty($name)) {
			Html::addCssClass($options, $cssPrefix . '-' . $name);
		}

		$this->options = $options;
	}

	/**
	 * @return string
	 */
	public function __toString() :string
	{
		$options = $this->options;

		$tag = ArrayHelper::remove($options, 'tag', 'i');

		return Html::tag($tag, null, $options);
	}

	/**
	 * @param string $value
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function color(string $value): self
	{
		$values = [
			P2Icons::PRIMARY,
			P2Icons::PRIMARY_EMPHASIS,
			P2Icons::SECONDARY,
			P2Icons::SECONDARY_EMPHASIS,
			P2Icons::SUCCESS,
			P2Icons::SUCCESS_EMPHASIS,
			P2Icons::DANGER,
			P2Icons::DANGER_EMPHASIS,
			P2Icons::WARNING,
			P2Icons::WARNING_EMPHASIS,
			P2Icons::INFO,
			P2Icons::INFO_EMPHASIS,
			P2Icons::LIGHT,
			P2Icons::LIGHT_EMPHASIS,
			P2Icons::DARK,
			P2Icons::DARK_EMPHASIS,
		];

		return $this->addCssClass(
			self::TEXT_PREFIX . '-' . $value,
			in_array((string)$value, $values, true),
			sprintf(
				'%s - invalid value. Use one of the constants: %s.',
				'P2Icons::color()',
				implode(', ', $values)
			)
		);
	}

	/**
	 * @param integer $value range 1 to 6
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size(int $value): self
	{
		return $this->addCssClass(
			self::SIZE_PREFIX . '-' . $value,
			in_array($value, range(1, 6), true),
			sprintf(
				'%s - invalid value. Use an integer between 1 and 6.',
				'P2Icons::size()',
				implode(', ', range(1, 6))
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
	public function addCssClass($class, $condition = true, $throw = false): self
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

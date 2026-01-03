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

		$ariaDefaults = [
			'aria-hidden' => 'true',
			'focusable'   => 'false',
		];

		$this->options = array_merge($ariaDefaults, $options);
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
	 * @param integer $value range 1 to 6
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function size(int $value): self
	{
		return $this->addCssClass(
			P2Icons::SIZE_PREFIX . '-' . $value,
			in_array($value, range(1, 6), true),
			sprintf(
				'%s - invalid value. Use an integer between 1 and 6.',
				'P2Icons::size()',
				implode(', ', range(1, 6))
			)
		);
	}

	/**
	 * @param string $label
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function ariaLabel(string $label): self
	{
		$label = trim($label);

		if ($label === '')
		{
			throw new InvalidConfigException(sprintf(
				'%s - invalid value. Label must be a non-empty string.',
				'P2Icon::ariaLabel()'
			));
		}

		$this->options['aria-label'] = $label;

		// If the icon has a label, it should not be hidden from assistive tech.
		$this->options['aria-hidden'] = 'false';

		return $this;
	}

	/**
	 * @param bool $focusable = true
	 * @return \p2m\components\P2Icon
	 * @throws \yii\base\InvalidConfigException
	 */
	public function focusable(bool $focusable = true): self
	{
		$this->options['focusable'] = $focusable ? 'true' : 'false';

		if ($focusable) {
			$this->options['aria-hidden'] = 'false';
		}

		return $this;
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

	/**
	 * Add or overwrite an HTML attribute.
	 *
	 * @param string      $name
	 * @param string      $value
	 * @param bool        $condition
	 * @param string|bool $throw
	 * @return self
	 * @throws \yii\base\InvalidConfigException
	 */
	public function addAttribute(string $name, string $value, bool $condition = true, $throw = false): self
	{
		if ($condition === false) {
			if (!empty($throw)) {
				$message = !is_string($throw)
					? 'Condition is false'
					: $throw;

				throw new InvalidConfigException($message);
			}

			return $this;
		}

		$this->options[$name] = $value;

		return $this;
	}
}
